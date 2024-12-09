@extends('frontend.components.master')

@section('title', 'Register')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endsection

@section('content')

    <div id="content" class="no-padding">

        <div class="container mt-5 mb-5">
            @if (session()->get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif

            @if (session()->get('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <h2 class="mb-4">Register Members</h2>
            <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="members">
                    @if (old('members'))
                        @foreach (old('members') as $index => $member)
                            <div class="card mb-4 shadow-sm">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">{{ $index === 0 ? 'Team Leader' : 'Member ' . ($index + 1) }}</h4>
                                    @if($index !== 0)
                                        <button type="button" class="btn btn-danger btn-sm remove-member">Remove
                                        </button>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <label class="form-label">Name and Surname <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="members[{{ $index }}][name]" class="form-control"
                                                   placeholder="Enter name"
                                                   value="{{ old('members.'.$index.'.name') }}">
                                            <small class="text-danger">
                                                @error("members.{$index}.name") {{ $message }} @enderror
                                            </small>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="members[{{ $index }}][email]" class="form-control"
                                                   placeholder="Enter email"
                                                   value="{{ old('members.'.$index.'.email') }}">
                                            <small class="text-danger">
                                                @error("members.{$index}.email") {{ $message }} @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-1">
                                        <div class="col-md-6">
                                            <label class="form-label">University <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="members[{{ $index }}][university]"
                                                   class="form-control" placeholder="Enter university"
                                                   value="{{ old('members.'.$index.'.university') }}">
                                            <small class="text-danger">
                                                @error("members.{$index}.university") {{ $message }} @enderror
                                            </small>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Country <span class="text-danger">*</span></label>
                                            <input type="text" name="members[{{ $index }}][country]"
                                                   class="form-control" placeholder="Enter country"
                                                   value="{{ old('members.'.$index.'.country') }}">
                                            <small class="text-danger">
                                                @error("members.{$index}.country") {{ $message }} @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-1">
                                        <div class="col-md-12">
                                            <label class="form-label">Transcript or Student Certificate (PDF file | Max
                                                Size: 2MB) <span class="text-danger">*</span></label>
                                            <input type="file" name="members[{{ $index }}][file]" class="form-control">
                                            <small class="text-danger">
                                                @error("members.{$index}.file") {{ $message }} @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Default Team Leader -->
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header">
                                <h4 class="mb-0">Team Leader</h4>
                            </div>
                            <div class="card-body">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <label class="form-label">Name and Surname <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="members[0][name]" class="form-control"
                                               placeholder="Enter Name and Surname">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="members[0][email]" class="form-control"
                                               placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <label class="form-label">University <span class="text-danger">*</span></label>
                                        <input type="text" name="members[0][university]" class="form-control"
                                               placeholder="Enter University">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Country <span class="text-danger">*</span></label>
                                        <input type="text" name="members[0][country]" class="form-control"
                                               placeholder="Enter Country">
                                    </div>
                                </div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-12">
                                        <label class="form-label">Transcript or Student Certificate (PDF file | Max
                                            Size: 2MB) <span class="text-danger">*</span></label>
                                        <input type="file" name="members[0][file]" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="mb-4">
                    <button type="button" id="addMemberButton" class="btn btn-secondary">Add Another Member</button>
                </div>

                <div>
                    <button type="submit" id="registerButton" class="btn btn-success btn-lg">Register</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('js')
    <script>
        let memberIndex = document.querySelectorAll('#members .card').length;

        document.getElementById('addMemberButton').addEventListener('click', function () {
            if (memberIndex >= 3) {
                alert('You can only add up to 3 members (including the Team Leader).');
                return;
            }

            const membersDiv = document.getElementById('members');
            const newMember = document.createElement('div');
            newMember.classList.add('card', 'mb-4', 'shadow-sm');

            newMember.innerHTML = `
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Member ${memberIndex + 1}</h4>
                    <button type="button" class="btn btn-danger btn-sm remove-member">Remove</button>
                </div>
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <label class="form-label">Name and Surname <span class="text-danger">*</span></label>
                            <input type="text" name="members[${memberIndex}][name]" class="form-control" placeholder="Enter name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="members[${memberIndex}][email]" class="form-control" placeholder="Enter email">
                        </div>
<div class="col-md-6">
                                        <label class="form-label">University <span class="text-danger">*</span></label>
                                        <input type="text" name="members[0][university]" class="form-control" placeholder="Enter University">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Country <span class="text-danger">*</span></label>
                                        <input type="text" name="members[0][country]" class="form-control" placeholder="Enter Country">
                                    </div>


                                    <div class="col-md-12">
                                        <label class="form-label">Transcript or Student Certificate (PDF file | Max Size: 2MB) <span class="text-danger">*</span></label>
                                        <input type="file" name="members[0][file]" class="form-control">
                                    </div>
                    </div>
                </div>



            `;
            membersDiv.appendChild(newMember);
            memberIndex++;
        });

        document.addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('remove-member')) {
                event.target.closest('.card').remove();
                memberIndex--;
            }
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            const registerButton = document.getElementById('registerButton');

            form.addEventListener('submit', function (event) {
                // Butonu devre dışı bırak
                registerButton.disabled = true;
                // Buton metnini "Sending..." olarak değiştir
                registerButton.textContent = 'Sending...';
            });
        });
    </script>
@endsection
