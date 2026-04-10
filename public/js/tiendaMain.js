function filtrar(categoria, elemento){
    const productos = document.querySelectorAll('.card-producto');
    const contenedor = document.getElementById('contenedor-productos');

    contenedor.style.opacity = 0;

    setTimeout(()=>{
        productos.forEach(p=>{
            if(categoria === 'todos' || p.dataset.categoria === categoria){
                p.style.display = 'block';
            }else{
                p.style.display = 'none';
            }
        });
        contenedor.style.opacity = 1;
    }, 300);

    document.querySelectorAll('.sidebar li').forEach(li=>li.classList.remove('activo'));
    elemento.classList.add('activo');
}