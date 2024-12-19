<div class="container">
    <div class="row mb-3">
        <label for="name" class="col-sm-4 col-form-label">Name</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="name" value="{{ $view->name }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="email" value="{{ $view->email }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <label for="phone" class="col-sm-4 col-form-label">Phone</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="phone" value="{{ $view->phone }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <label for="username" class="col-sm-4 col-form-label">Username</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="username" value="{{ $view->username }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <label for="amount" class="col-sm-4 col-form-label">Amount</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="amount"
                value="{{ number_format($view->amount, 0, ',', '.') }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <label for="status" class="col-sm-4 col-form-label">Status</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="status"
                value="{{ $view->status ? 'Active' : 'Inactive' }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <label for="is_admin" class="col-sm-4 col-form-label">Is Admin</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="is_admin" value="{{ $view->is_admin ? 'Yes' : 'No' }}"
                readonly>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
</div>
