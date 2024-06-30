<div>
<form action="{{ route('ventas.store') }}" method="POST">
    @csrf
    <h2>Información del Cliente</h2>
    <div>
        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required>
    </div>
    <div>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">
    </div>
    <div>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion">
    </div>
    <div>
        <label for="id_cliente">Número de Identificación del Cliente:</label>
        <input type="text" id="id_cliente" name="id_cliente" required>
    </div>

    <h2>Información de la Venta</h2>
    <div>
        <label for="fecha_venta">Fecha de la Venta:</label>
        <input type="date" id="fecha_venta" name="fecha_venta" required>
    </div>
    <div>
        <label for="numero_factura">Número de Factura:</label>
        <input type="text" id="numero_factura" name="numero_factura" required>
    </div>
    <div>
        <label for="metodo_pago">Método de Pago:</label>
        <select id="metodo_pago" name="metodo_pago" required>
            <option value="tarjeta_credito">Tarjeta de Crédito</option>
            <option value="tarjeta_debito">Tarjeta de Débito</option>
            <option value="paypal">PayPal</option>
            <option value="efectivo">Efectivo</option>
            <option value="transferencia">Transferencia Bancaria</option>
        </select>
    </div>
    <div>
        <label for="descuento">Descuento:</label>
        <input type="number" id="descuento" name="descuento" step="0.01" min="0">
    </div>
    <div>
        <label for="impuestos">Impuestos:</label>
        <input type="number" id="impuestos" name="impuestos" step="0.01" min="0">
    </div>

    <h2>Información del Producto</h2>
    <div id="productos">
        <div class="producto">
            <input type="text" name="codigo_producto[]" placeholder="Código del Producto" required>
            <input type="text" name="nombre_producto[]" placeholder="Nombre del Producto" required>
            <input type="number" name="cantidad[]" placeholder="Cantidad" min="1" required>
            <input type="number" name="precio_unitario[]" placeholder="Precio Unitario" step="0.01" min="0" required>
            <input type="number" name="total_parcial[]" placeholder="Total Parcial" step="0.01" min="0" required readonly>
        </div>
    </div>
    <button type="button" onclick="agregarProducto()">Agregar Producto</button>

    <h2>Totales</h2>
    <div>
        <label for="subtotal_general">Subtotal General:</label>
        <input type="number" id="subtotal_general" name="subtotal_general" step="0.01" min="0" readonly>
    </div>
    <div>
        <label for="total_descuentos">Total de Descuentos:</label>
        <input type="number" id="total_descuentos" name="total_descuentos" step="0.01" min="0" readonly>
    </div>
    <div>
        <label for="total_impuestos">Total de Impuestos:</label>
        <input type="number" id="total_impuestos" name="total_impuestos" step="0.01" min="0" readonly>
    </div>
    <div>
        <label for="total_general">Total General:</label>
        <input type="number" id="total_general" name="total_general" step="0.01" min="0" readonly>
    </div>

    <button type="submit">Registrar Venta</button>
</form>

<script>
function agregarProducto() {
    const productosDiv = document.getElementById('productos');
    const nuevoProducto = document.createElement('div');
    nuevoProducto.className = 'producto';
    nuevoProducto.innerHTML = `
        <input type="text" name="codigo_producto[]" placeholder="Código del Producto" required>
        <input type="text" name="nombre_producto[]" placeholder="Nombre del Producto" required>
        <input type="number" name="cantidad[]" placeholder="Cantidad" min="1" required>
        <input type="number" name="precio_unitario[]" placeholder="Precio Unitario" step="0.01" min="0" required>
        <input type="number" name="total_parcial[]" placeholder="Total Parcial" step="0.01" min="0" required readonly>
    `;
    productosDiv.appendChild(nuevoProducto);
}

// Aquí deberías agregar JavaScript para calcular los totales automáticamente
</script>
</div>
