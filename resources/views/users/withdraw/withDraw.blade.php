@extends('layouts.user_backend.app')

@section('content')
    @php
        $wallet = App\Models\Wallet::where('user_id', Auth::user()->id)->first();
        $userId= Auth::user();
        $user= App\Models\User::where('id',$userId->id)->first();
    @endphp
    <div class="card overflow-visible card-style" style="margin-top: 70px;">
        <div class="content mb-0">
            <div style="display: flex;justify-content: space-between;">
                <h2> Withdraw Balance </h2>
                <h2> <span id="balance_span"></span>৳ {{ $wallet->my_wallet ?? 0.0 }} </h2>
            </div>

            <form id="send_form" class="demo-animation  m-0" action="{{ route('users.withDraw.ammount') }}" method="POST">
                @csrf

                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <select class="form-control rounded-xs" id="transfer_sender_ac" name="type"
                        style="font-size: 18px !important;" required>
                        <option value="Ezzy Wallet">Nogod</option>
                    </select>
                    <label for="transfer_sender_ac" class="color-theme"> Select Wallet </label>
                    @error('type')
                        <span class="text-danger" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <input type="number" class="form-control rounded-xs" name="phone_number" id="transfer_send_amount"
                        placeholder=" Phone number " required  value="{{Auth::user()->phone_no}}" />
                    <label for="transfer_send_amount" class="color-theme"> Phone number </label>
                    @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <input type="number" class="form-control rounded-xs" name="send_amount" id="transfer_send_amount"
                        placeholder="Amount" required />
                    <label for="transfer_send_amount" class="color-theme"> Amount </label>

                </div>
                @error('send_amount')
                    <span class="text-danger" style="color:red">{{ $message }}</span>
                @enderror


                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <input type="text" class="form-control rounded-xs" id="_tpin" name="tpin" placeholder="T-PIN"
                        required />
                    <label for="_tpin" class="color-theme"> T-PIN </label>
                    @error('tpin')
                        <span class="" style="color:red">{{ $message }}</span>
                    @enderror
                </div>



                <button class="btn btn-full bg-blue-dark rounded-xs text-uppercase font-700 w-100 btn-s mt-4"
                    style="margin-bottom: 20px;"> Send </button>

            </form>

        </div>
    </div>

    @push('customJs')
        <script>
            var receiver = $('#receiver');
            var receiverFname = $('#receiver_fname');
            receiver.on('keyup', function() {


                var value = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route('users.get.ajax') }}',
                    method: 'POST',
                    data: {
                        key1: value,
                    },
                    success: function(response) {
                        //var data= JSON.stringify(response)
                        receiverFname.val(response)
                    },

                    error: function(xhr, status, error) {
                        console.error(error);
                    },
                });
            })
        </script>

        <script>
            $(document).ready(function() {
                // Cache the elements
                var senderWalletSelect = $('#transfer_sender_ac');
                var receiverIdInput = $('#receiver');
                var receiverFnameInput = $('#receiver_fname');

                // Initially, check the selected option on page load
                checkSelectedOption(senderWalletSelect.val());

                // Attach an event listener to the wallet selection dropdown
                senderWalletSelect.on('change', function() {
                    var selectedWallet = $(this).val();
                    checkSelectedOption(selectedWallet);
                });

                function checkSelectedOption(selectedWallet) {
                    // Check the selected option and set 'required' attribute accordingly
                    if (selectedWallet === 'Ezzy Wallet') {
                        receiverIdInput.prop('required', true);
                        receiverFnameInput.prop('required', true);
                    } else {
                        receiverIdInput.prop('required', false);
                        receiverFnameInput.prop('required', false);
                    }
                }
            });
        </script>
    @endpush
@endsection
