@extends('layouts.user_backend.app')

@section('content')
    <div class="row text-center" style="margin-top: 85px;">


        <div class="col-6 mb-n2">
            <div class="card card-style me-0" style="height:110px">
                <div class="card-top">
                    <img type="button" class="bank_class" data-bid="2" data-acid="1" data-ac="01923813381" data-acn="1"
                        data-img="https://www.oceanezzy.life/assets/media/nagad_logo.png" id="nagad_img"
                        src="https://www.oceanezzy.life/assets/media/nagad_logo.png" style="width: 150px;padding: 15px;">
                    <span style="position: absolute;top: 2px;left: 0;right: 0;color: #f69417;">Nagad 1 </span>
                </div>
            </div>
        </div>
        <!--
                     <div class="col-6 mb-n2">
                      <div class="card card-style me-0" style="height:110px">
                       <div class="card-top" >
                       <img type="button" class="bank_class" data-bid="2" data-acid="2" data-ac="01323167617" data-acn="2" data-img="https://www.oceanezzy.life/assets/media/nagad_logo.png" id="nagad_img" src="https://www.oceanezzy.life/assets/media/nagad_logo.png" style="width: 150px;padding: 15px;" > <span style="position: absolute;top: 2px;left: 0;right: 0;color: #f69417;">Nagad 2 </span>
                       </div>
                      </div>
                     </div>
                     
                     <!--<div class="col-6 mb-n2">
                      <div class="card card-style ms-0" style="height:110px">
                       <div class="card-top">
                        <img type="button" class="bank_class" data-bid="1" data-ac="018xxxxxxxx" data-img="https://www.oceanezzy.life/assets/media/bkash_logo.png" id="bkash_img" src="https://www.oceanezzy.life/assets/media/bkash_logo.png" style="width: 150px;padding: 15px;" >
                       </div>
                      </div>
                     </div>-->
    </div>



    <div class="row text-center" id='display-non' style="padding-top:70px; display:none">

        <div class="col-12 mb-n2">
            <div class="card card-style me-0" style="height:350px;">

                <div style="display: flex;flex-flow: column;width: 100%;justify-content: center;">
                    <div style="margin:5px auto;"><img id="xbank_logo" src="" style="width: 250px;height:150px;">
                    </div>
                    <div style="font-size: 2em;font-weight: bolder;color: #f7f720;">
                        <span>Nagad: </span>
                        <span id="acid"></span>
                    </div>
                    <div style="margin:5px auto;"> cash out <span></span> to agent </div>
                    <div id="wallet_address_text" style="margin:5px auto;"></div>
                    <div style="margin:5px auto;"><button type="button" id="cpy"
                            class="btn btn-primary me-1">Copy</button></div>
                </div>
            </div>
        </div>

        <div class="col-12 mb-n2">
            <div class="card card-style me-0 " style="height:320px;">

                <div class="card-center" style="margin: 10px 15px 20px 15px;">

                    <form id="form" class="demo-animation m-0" action="{{ route('users.payment.store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="agent_bank__id" id="agent_bank__id" value="">
                        <input type="hidden" name="agent_bank_ac" id="agent_bank_ac" value="">
                        <input type="hidden" name="agent_ac_no" id="agent_ac_no" value="">

                        <div class="form-custom form-label form-icon " style="margin-bottom: 20px;">
                            <input type="number" class="form-control rounded-xs" id="send_amount" name="send_amount"
                                value="" min="10" placeholder=" Cashout Amount" style="color: #fff;" />
                            <label for="send_amount" class="color-theme form-label-active">ক্যাশ আউট পরিমাণ</label>
                        </div>

                        <div class="form-custom form-label form-icon " style="margin-bottom: 20px;">
                            <input type="text" class="form-control rounded-xs" id="bank_ac" name="user_number"
                                placeholder="Sender Nagad Number" style="color: #fff;" />
                            <label for="bank_ac" class="color-theme form-label-active"> প্রেরকের নাম্বার</label>
                        </div>

                        <div class="form-custom form-label form-icon ">
                            <input type="text" class="form-control rounded-xs" id="trxid" name="tranx_id"
                                style="color: #fff;" placeholder="TxnID " required />
                            <label for="trxid" class="color-theme form-label-active"> ট্রানজেকশন আইডি </label>
                        </div>

                        <button class="btn btn-full rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                            style="background: #6236ff;font-size: 14px;">Request</button>

                    </form>


                </div>
            </div>
        </div>
    </div>

    @push('customJs')
        <script type="text/javascript">
            function pageLevelScript() {

                //////////////////////////////////////////// begin page data load ////////////////////////////////////////////
                ///////////////////////////////////////////// end page data load /////////////////////////////////////////////


                /////////////////////////////////////////// begin page method load ///////////////////////////////////////////

                $(document).on('click', '#cpy', function(e) {
                    var txt = document.getElementById('wallet_address_text').innerHTML;
                    console.log(txt)
                    navigator.clipboard.writeText(txt)
                        .then(() => {
                            t_alert('success', '', 'successfully copied');
                        })
                        .catch(() => {
                            t_alert('error', '', 'something went wrong');
                        });
                });

                $(document).on('click', '.bank_class', function(e) {
                    //console.log(this.dataset.bid);
                    document.getElementById('wallet_address_text').innerHTML = this.dataset.ac;
                    document.getElementById('agent_bank__id').value = this.dataset.bid;
                    document.getElementById('acid').innerHTML = this.dataset.acid;
                    document.getElementById('agent_ac_no').value = this.dataset.acn;
                    document.getElementById('display-non').style.display = 'block';
                    document.getElementById('xbank_logo').src = this.dataset.img;

                });
                //////////////////////////////////////////// end page method load ////////////////////////////////////////////
            }
        </script>
    @endpush
@endsection