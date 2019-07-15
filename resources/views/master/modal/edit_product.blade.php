<div class="modal fade edit_prod" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary shadow">
                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
            <form method="POST" class="edit_producct" action="{{url('product_add')}}">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Suplier</label>
                    <input type="text" name="suplier" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" name="type" required>
                </div>
                <div class="form-group">
                    <label>Tahun Perakitan</label>
                    <input type="date" class="form-control" name="tahun_perakitan" required>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Price List</label>
                    <input type="number" name="price_list" class="form-control" required>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary shadow">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
