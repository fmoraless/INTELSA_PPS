<div class="form-group">
    <label for="provider_id">Proveedor</label>
    <select class="form-control" id="provider_id" name="provider_id">
        @foreach($providers as $provider)
            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="tax">Impuesto</label>
    <input type="num" class="form-control" id="tax" name="tax" placeholder="19%" required>
</div>
<div class="form-group">
    <label for="product_id">Producto</label>
    <select class="form-control" id="product_id" name="product_id">
        @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="quantity">Cantidad</label>
    <input type="num" class="form-control" id="quantity" name="quantity">
</div>
<div class="form-group">
    <label for="price">Precio de compra</label>
    <input type="num" class="form-control" id="price" name="price">
</div>

<div class="form-group">
    <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
</div>

<div class="form-group">
    <h4 class="card-title">Detalle de venta</h4>
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table table-striped">
            <thead>
            <tr>
                <th>Eliminar</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>SubTotal (CLP)</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th colspan="4">
                    <p align="right">TOTAL:</p>
                </th>
                <th>
                    <p align="right"><span id="total">CLP 0.00</span>
                    </p>
                </th>
            </tr>
            <tr>
                <th colspan="4">
                    <p align="right">TOTAL IMPUESTO (19%)</p>
                </th>
                <th>
                    <p align="right"><span id="total_impuesto">CLP 0.00</span>
                    </p>
                </th>
            </tr>
            <tr>
                <th colspan="4">
                    <p align="right">TOTAL A PAGAR</p>
                </th>
                <th>
                    <p align="right"><span align="right" id="total_pagar_html">CLP 0.00</span>
                        <input type="hidden" name="total" id="total_pagar">
                    </p>
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
