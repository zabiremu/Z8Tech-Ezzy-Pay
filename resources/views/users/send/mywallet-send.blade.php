@extends('layouts.user_backend.app')

@section('content')
    <div class="card overflow-visible card-style" style="margin-top: 70px;">
        <div class="content mb-0">
            <div style="display: flex;justify-content: space-between;">
                <h2><a href="{{ route('users.send') }}" class="btn {{ request()->routeIs('users.send') ? 'btn-info' : 'btn-danger' }}">Transfer Booking Balance</a></h2>
                <h2><a href="{{ route('users.my_wallet_fund_transfer') }}" class="btn {{ request()->routeIs('users.my_wallet_fund_transfer') ? 'btn-info' : 'btn-danger' }}">Transfer My-Wallet Balance</a></h2>
                <h2><span id="balance_span">Balance </span> {{ $wallet->my_wallet ?? 0.00}} ৳</h2>
            </div>

            <form id="send_form" class="demo-animation  mt-3" action="{{ route('users.send.money.freinds') }}" method="POST">
                @csrf

                <div class="form-custom form-label form-icon mt-3">
                    <i class="bi font-14"></i>
                    <input type="text" class="form-control rounded-xs" name="type" 
                        value="My Wallet" readonly/>
                    <label for="type" class="color-theme"> My Wallet </label>
                    @error('type')
                        <span class="text-danger" style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <input type="text" class="form-control rounded-xs" name="user_id" id="receiver"
                        placeholder="Receiver ID" />
                    <label for="receiver_id" class="color-theme"> Receiver </label>
                    @error('user_id')
                        <span class="text-danger" style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <input type="text" class="form-control rounded-xs" name="receiver_fname" id="receiver_fname"
                        value="" disabled readonly />

                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <input type="number" class="form-control rounded-xs" name="send_amount" id="transfer_send_amount"
                        placeholder="Amount" />
                    <label for="transfer_send_amount" class="color-theme"> Amount </label>
                    @error('send_amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi font-14"></i>
                    <input type="number" class="form-control rounded-xs" id="tpin" name="tpin"
                        placeholder="T-PIN" />
                    <label for="tpin" class="color-theme"> T-PIN </label>
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
                        receiverFname.val(response)
                    },

                    error: function(xhr, status, error) {
                        console.error(error);
                    },
                });
            })
        </script>

        {{-- <script>
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
        </script> --}}
    @endpush
@endsection