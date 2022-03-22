<x-admin title="Thêm nhân viên">
    <div class="col-md-6 mt-3">
        <form action="{{ route('luudangky') }}" method="post">
            @csrf
            <x-input name='name' label='Tên nhân viên' />
            <x-input name='email' label='Email' />
            <x-input type='password' name='password' label='Mật khẩu' />
            <x-input type='password' name='confirmPassword' label='Xác nhận mật khẩu' />
            <div class="mt-3">
                <label for="" class="form-label">Là Admin</label> <br>
                <input type="radio" value="1" name="is_admin">Yes
                <input type="radio" value="0" name="is_admin">No <br>
            </div>
            <button class="btn btn-success text-light mt-3">Thêm dữ liệu</button>
        </form>
    </div>
</x-admin>
