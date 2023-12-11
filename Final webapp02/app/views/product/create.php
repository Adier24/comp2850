<div class="border border-secondary-300 p-4">
    <h2 class='text-info'>Crear Producto</h2>

    <form action="index.php?url=product/save/0" method="post" class='form'>
        <div class="form-group mb-3">
            <input type="hidden" name="id" value="0" required>
            <input type="hidden" name="accion" value="create">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class='form-control' value="" required>
        </div>
        <div class="form-group mb-3">
            <label for="suplidor">Suplidor</label>
            <input type="text" id="suplidor" name="suplidor" class='form-control' value="" required>
        </div>
        <div class="form-group mb-3">
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" class='form-control' placeholder="0" value="" required>
        </div>
        <div class="form-group mb-3">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" class='form-control' placeholder="0.00$" step="0.01" value="" required>
        </div>
        <div class="form-group">
            <a href='.' class='btn btn-secondary'>Cancelar</a>
            <button class='btn btn-primary' type="submit">Guardar</button>
        </div>
    </form>
</div>
