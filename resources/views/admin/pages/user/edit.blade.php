<form id="userForm" method="post" action="{{ url("admin/user/{$edit['id']}/edit") }}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
            value="{{ $edit['name'] }}" required>
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"
            value="{{ $edit['username'] }}" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number"
            value="{{ $edit['phone'] }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
            value="{{ $edit['email'] }}" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
    </div>

    <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password"
            placeholder="Confirm your password">
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" form="userForm">Save changes</button>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="status" name="status"
                {{ $edit['status'] == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="status">
                {{ $edit['status'] == 1 ? 'Active' : 'Non Active' }}
            </label>
        </div>
    </div>
</form>

<script>
    $(function() {
        let datatable = $('#example2').DataTable();
        $("form").on("submit", function(e) {
            e.preventDefault()

            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: $(this).serialize(),
                success: function(response) {
                    datatable.ajax.reload();
                    if (response.code == "000") {
                        $("#exampleModalCenter").modal("hide")
                    } else {
                        alert(response.messages)
                    }
                },
                error: function(error) {}
            })
        })
    })
</script>
