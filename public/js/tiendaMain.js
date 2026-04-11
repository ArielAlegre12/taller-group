//
document.addEventListener('DOMContentLoaded', () => {
    
    const items = document.querySelectorAll('.sidebar li');
    items.forEach(item => {
        item.addEventListener('click', () => {
            const categoria = item.dataset.categoria;
            filtrar(categoria, item);
        });
    });

    const btnCantidad = document.querySelectorAll('.cantidad button');
    btnCantidad.forEach(btn => {
        btn.addEventListener('click', () => {
            const cambio = btn.textContent === '+' ? 1 : -1;
            cambiarCantidad(btn, cambio);
        });
    });
});

//función para interactuar entre categorías
function filtrar(categoria, elemento) {
    const productos = document.querySelectorAll('.card-producto');
    const contenedor = document.getElementById('contenedor-productos');

    contenedor.style.opacity = 0;

    setTimeout(() => {
        productos.forEach(p => {
            if (categoria === 'todos' || p.dataset.categoria === categoria) {
                p.style.display = 'block';
            } else {
                p.style.display = 'none';
            }
        });
        contenedor.style.opacity = 1;
    }, 300);

    document.querySelectorAll('.sidebar li').forEach(li => li.classList.remove('activo'));
    elemento.classList.add('activo');
}

//función para cambiar cantidad de productos
function cambiarCantidad(boton, cambio) {
    const contenedor = boton.parentElement;
    const numero = contenedor.querySelector('.numero');

    let valor = parseInt(numero.textContent);

    valor += cambio;
    if (valor < 1) valor = 1;

    numero.textContent = valor;
}