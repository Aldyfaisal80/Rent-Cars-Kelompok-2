<div class="container-fluid pt-4">
    <div class="col-sm-12 col-xl-12">
        <div class="row g-4">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit User</h6>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nama</label>
                        <input type="text" class="form-control" wire:model="nama" id="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class=" form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Addres</label>
                        <input type="text" class="form-control" wire:model="email" id="email" value="{{ old('email') }}">
                        @error('email')
                            <div class=" form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" value="{{ old('password') }}">Password</label>
                        <input type="password" class="form-control" wire:model="password" id="password">
                        @error('password')
                            <div class=" form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Role</label>
                        <select name="role" id="Role" class="form-select" wire:model="role">
                            <option value="">-- Pilih --</option>
                            <option value="admin">Admin</option>
                            <option value="pemilik">pemilik</option>
                        </select>
                        @error('role')
                            <div class=" form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="button" wire:click="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
