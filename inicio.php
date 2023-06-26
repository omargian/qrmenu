<?php

/**
 * Template Name: Inicio
 */

// Exit if accessed directly
defined('ABSPATH') or die('No script kiddies please!');
?>

<?php get_header(); ?>
<style>
  .glightbox-container .ginner-container{
    justify-content: flex-start;
  }
  .gslide-image img.zoomable{
    top: 80px;
  }
  .glightbox-clean .gdesc-inner {
    padding: 0px;
  }
  .item-menu {
    font-family: "Montserrat";
    font-weight: 600;
    background: #fff3cd;
  }
  .glightbox-mobile .glightbox-container .gslide-description {
    bottom: none;
    top: 300px;
    margin-top: 10px;
  }
  .glightbox-mobile .glightbox-container .gslide-title {
    font-family: "Great Vibes";
	  font-size: 40px;
    text-align: center;
  }
  .triangulo {
  display: inline-block;
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 20px solid #dc3545;
  margin-right: 5px;
  margin-left: 5px;
}
.categoria-menu {
  font-size: 35px;
}
</style>

<div class="promo-dia">
  <div class="alert row alert-warning fade show mx-auto">
  <div class="d-flex justify-content-start">
  <button type="button" class="btn-close mb-2" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    <div class="card-body" style="max-width:320px;">
    <div id="gallery-single" class="gallery-single">
      <div class="slides-3 swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" class="glightboxPromo"><img class="mb-3" src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" alt="" width="100%"/></a>
            </div>
            <div class="swiper-slide">
              <a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" class="glightboxPromo"><img class="mb-3" src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" alt="" width="100%"/></a>
            </div>
            <div class="swiper-slide">
              <a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" class="glightboxPromo"><img class="mb-3" src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" alt="" width="100%"/></a>
            </div>
          </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
      <h1 class="categoria-menu mb-3 text-center">Promoción del día</h1>
      <p class="fs-3 fw-bold card-text">Ensalada Cesar <span class="fw-bold text-danger">+</span></p>
      <p class="fs-3 fw-bold card-text">2 Cheese Burgers <span class="fw-bold text-danger">+</span></p>
      <p class="fs-3 fw-bold card-text">2 Beers</p>
      <div class="d-flex justify-content-end">
        <p type="text" class="fs-2 fw-bold btn badge bg-warning rounded-pill text-wrap mb-2 text-white position-absolute" style="transform: rotate(-25deg);right:20px; bottom:100px">$9.99</p>
      </div>
      <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-danger btn-rounded-pill mb-2 text-white w-75" data-bs-dismiss="alert" aria-label="Close">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<section style="margin-top:0px;height:100vh">
<div id="phone">

    <div class="screen">
      <div class="background-screen"></div>
      <div class="empty">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
        <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0v-3Zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5ZM.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5ZM4 4h1v1H4V4Z"/>
        <path d="M7 2H2v5h5V2ZM3 3h3v3H3V3Zm2 8H4v1h1v-1Z"/>
        <path d="M7 9H2v5h5V9Zm-4 1h3v3H3v-3Zm8-6h1v1h-1V4Z"/>
        <path d="M9 2h5v5H9V2Zm1 1v3h3V3h-3ZM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8H8Zm2 2H9V9h1v1Zm4 2h-1v1h-2v1h3v-2Zm-4 2v-1H8v1h2Z"/>
        <path d="M12 9h2V8h-2v1Z"/>
      </svg>
        <span>Gracias por su visita</span>
      </div>
        <div class="content">
            <div class="entries" style="height: 5720px;"><!--4220 Esto es clave para que la animacion funcione de 300px-->
                <article>
                    <div class="compact"></div>
                    <div class="inner" style="overflow:auto">
                        <div class="text">
                        <table class="table table align-middle table-borderless" style="min-width:600px">
                            <thead>
                              <tr>
                                <th colspan="6"><h2 class="categoria-menu"><span class="triangulo"></span>Entradas</h2></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" class="glightbox preview-link" data-glightbox="title: Bruschetta; description: .custom-desc1"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Bruschetta</td>
                                <td>Tomate, ajo, albahaca
                                  <div class="glightbox-desc custom-desc1 gdesc-open">
                                    <ul class="list-group" style="background: #fff3cd">
                                      <li class="fs-5 list-group-item item-menu d-block text-black">
                                        Ingredientes: <span class="fs-5 d-block mt-2">Tomate, ajo, albahaca, queso, jamon, aceitunas</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                        Calorias: <span class="badge bg-warning fs-4 rounded-pill text-white">140</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                        Precio: <span class="badge bg-warning fs-4 rounded-pill text-white">$8.99</span></li>
                                    </ul>
                                  </div>
                                </td>
                                <td>150</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc2"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Croquetas de jamón</td>
                                <td>Jamón, bechamel, pan rallado
                                  <div class="glightbox-desc custom-desc2">
                                  <ul class="list-group">
                                      <li class="fs-5 list-group-item item-menu d-block text-black">
                                        Ingredientes: <span class="fs-5 d-block mt-2">Jamón, bechamel, pan rallado, aceitunas</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                        Calorias: <span class="badge bg-warning fs-4 rounded-pill text-white">180</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                        Precio: <span class="badge bg-warning fs-4 rounded-pill text-white">$7.99</span></li>
                                    </ul>
                                  </div>
                                </td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" class="glightbox preview-link" data-glightbox="title: Empanadas de queso; description: .custom-desc3"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Empanadas de queso</td>
                                <td>Queso, masa, cebolla
                                  <div class="glightbox-desc custom-desc3">
                                    <ul class="list-group">
                                      <li class="fs-5 list-group-item item-menu d-block text-black">
                                          Ingredientes: <span class="fs-5 d-block mt-2">Tomate, Jamón, bechamel, pan rallado, aceitunas</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                          Calorias: <span class="badge bg-warning fs-4 rounded-pill text-white">220</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                          Precio: <span class="badge bg-warning fs-4 rounded-pill text-white">$9.99</span></li>
                                    </ul>
                                  </div>
                                </td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc4"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Rollitos primavera</td>
                                <td>Vegetales, fideos de arroz, salsa agridulce
                                  <div class="glightbox-desc custom-desc4">
                                  <ul class="list-group">
                                      <li class="fs-5 list-group-item item-menu d-block text-black">
                                          Ingredientes: <span class="fs-5 d-block mt-2">Vegetales, fideos de arroz, salsa agridulce, aceitunas</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                          Calorias: <span class="badge bg-warning fs-4 rounded-pill text-white">190</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                          Precio: <span class="badge bg-warning fs-4 rounded-pill text-white">$6.99</span></li>
                                    </ul>
                                  </div>
                                </td>
                                <td>190</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$6.99</span></td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc5"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Alitas de pollo</td>
                                <td>Pollo, salsa barbacoa, especias
                                  <div class="glightbox-desc custom-desc5">
                                  <ul class="list-group">
                                      <li class="fs-5 list-group-item item-menu d-block text-black">
                                          Ingredientes: <span class="fs-5 d-block mt-2">Pollo, salsa barbacoa, especia</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                          Calorias: <span class="badge bg-warning fs-4 rounded-pill text-white">250</span></li>
                                      <li class="fs-5 list-group-item item-menu d-flex justify-content-between align-items-center text-black">
                                          Precio: <span class="badge bg-warning fs-4 rounded-pill text-white">$10.99</span></li>
                                    </ul>
                                  </div>
                                </td>
                                <td>250</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$10.99</span></td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc6"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tostones con guacamole</td>
                                <td>Plátano verde frito, guacamole<div class="glightbox-desc custom-desc6"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc7"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Calamares fritos</td>
                                <td>Calamares, harina, limón<div class="glightbox-desc custom-desc7"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99<span></td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc8"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Ensalada César</td>
                                <td>Lechuga romana, pollo a la parrilla, crutones, aderezo César<div class="glightbox-desc custom-desc8"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>280</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc9"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Quesadillas de champiñones</td>
                                <td>Champiñones, queso, tortillas de maíz<div class="glightbox-desc custom-desc9"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>210</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc10"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tabla de quesos</td>
                                <td>Quesos variados, mermelada, frutos secos<div class="glightbox-desc custom-desc10"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>320</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$12.99</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="compact"></div>
                    <div class="inner" style="overflow:auto">
                        <div class="text">
                        <table class="table table-borderless" style="min-width:600px">
                            <thead>
                              <tr>
                                <th colspan="6"><h2 class="categoria-menu"><span class="triangulo"></span>Plato fuerte</h2></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" class="glightbox preview-link" data-glightbox="title: Bruschetta; description: .custom-desc1"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Bruschetta</td>
                                <td>Tomate, ajo, albahaca<div class="glightbox-desc custom-desc1 gdesc-open"><p>Ingredientes: Tomate, ajo, albahaca, queso, jamon, aceitunas</p><p>Calorias: 150</p><p>Precio: $8.99</p></div></td>
                                <td>150</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc2"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Croquetas de jamón</td>
                                <td>Jamón, bechamel, pan rallado<div class="glightbox-desc custom-desc2"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" class="glightbox preview-link" data-glightbox="title: Empanadas de queso; description: .custom-desc3"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Empanadas de queso</td>
                                <td>Queso, masa, cebolla<div class="glightbox-desc custom-desc3"><p class="fs-5">Ingredientes: Queso, masa, cebolla</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc4"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Rollitos primavera</td>
                                <td>Vegetales, fideos de arroz, salsa agridulce<div class="glightbox-desc custom-desc4"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>190</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$6.99</span></td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc5"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Alitas de pollo</td>
                                <td>Pollo, salsa barbacoa, especias<div class="glightbox-desc custom-desc5"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>250</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$10.9</span>9</td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc6"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tostones con guacamole</td>
                                <td>Plátano verde frito, guacamole<div class="glightbox-desc custom-desc6"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc7"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Calamares fritos</td>
                                <td>Calamares, harina, limón<div class="glightbox-desc custom-desc7"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc8"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Ensalada César</td>
                                <td>Lechuga romana, pollo a la parrilla, crutones, aderezo César<div class="glightbox-desc custom-desc8"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>280</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc9"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Quesadillas de champiñones</td>
                                <td>Champiñones, queso, tortillas de maíz<div class="glightbox-desc custom-desc9"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>210</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc10"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tabla de quesos</td>
                                <td>Quesos variados, mermelada, frutos secos<div class="glightbox-desc custom-desc10"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>320</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$12.9</span>9</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="compact"></div>
                    <div class="inner" style="overflow:auto;">
                        <div class="text">
                        <table class="table table-borderless" style="min-width:600px">
                            <thead>
                              <tr>
                                <th colspan="6"><h2 class="categoria-menu"><span class="triangulo"></span>Ensaladas</h2></th>
                              </tr>

                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" class="glightbox preview-link" data-glightbox="title: Bruschetta; description: .custom-desc1"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Bruschetta</td>
                                <td>Tomate, ajo, albahaca<div class="glightbox-desc custom-desc1 gdesc-open"><p>Ingredientes: Tomate, ajo, albahaca, queso, jamon, aceitunas</p><p>Calorias: 150</p><p>Precio: $8.99</p></div></td>
                                <td>150</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc2"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Croquetas de jamón</td>
                                <td>Jamón, bechamel, pan rallado<div class="glightbox-desc custom-desc2"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" class="glightbox preview-link" data-glightbox="title: Empanadas de queso; description: .custom-desc3"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Empanadas de queso</td>
                                <td>Queso, masa, cebolla<div class="glightbox-desc custom-desc3"><p class="fs-5">Ingredientes: Queso, masa, cebolla</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc4"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Rollitos primavera</td>
                                <td>Vegetales, fideos de arroz, salsa agridulce<div class="glightbox-desc custom-desc4"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>190</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$6.99</span></td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc5"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Alitas de pollo</td>
                                <td>Pollo, salsa barbacoa, especias<div class="glightbox-desc custom-desc5"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>250</td>
                                <td>$<span class="badge bg-warning fs-5 rounded-pill text-white">10.99</span></td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc6"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tostones con guacamole</td>
                                <td>Plátano verde frito, guacamole<div class="glightbox-desc custom-desc6"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc7"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Calamares fritos</td>
                                <td>Calamares, harina, limón<div class="glightbox-desc custom-desc7"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc8"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Ensalada César</td>
                                <td>Lechuga romana, pollo a la parrilla, crutones, aderezo César<div class="glightbox-desc custom-desc8"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>280</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc9"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Quesadillas de champiñones</td>
                                <td>Champiñones, queso, tortillas de maíz<div class="glightbox-desc custom-desc9"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>210</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc10"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tabla de quesos</td>
                                <td>Quesos variados, mermelada, frutos secos<div class="glightbox-desc custom-desc10"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>320</td>
                                <td>$<span class="badge bg-warning fs-5 rounded-pill text-white">12.99</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="compact"></div>
                    <div class="inner" style="overflow:auto;">
                        <div class="text">
                        <table class="table table-borderless" style="min-width:600px">
                            <thead>
                              <tr>
                                <th colspan="6"><h2 class="categoria-menu"><span class="triangulo"></span>Postres</h2></th>
                              </tr>

                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" class="glightbox preview-link" data-glightbox="title: Bruschetta; description: .custom-desc1"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Bruschetta</td>
                                <td>Tomate, ajo, albahaca<div class="glightbox-desc custom-desc1 gdesc-open"><p>Ingredientes: Tomate, ajo, albahaca, queso, jamon, aceitunas</p><p>Calorias: 150</p><p>Precio: $8.99</p></div></td>
                                <td>150</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc2"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Croquetas de jamón</td>
                                <td>Jamón, bechamel, pan rallado<div class="glightbox-desc custom-desc2"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" class="glightbox preview-link" data-glightbox="title: Empanadas de queso; description: .custom-desc3"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Empanadas de queso</td>
                                <td>Queso, masa, cebolla<div class="glightbox-desc custom-desc3"><p class="fs-5">Ingredientes: Queso, masa, cebolla</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc4"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Rollitos primavera</td>
                                <td>Vegetales, fideos de arroz, salsa agridulce<div class="glightbox-desc custom-desc4"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>190</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$6.99</span></td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc5"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Alitas de pollo</td>
                                <td>Pollo, salsa barbacoa, especias<div class="glightbox-desc custom-desc5"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>250</td>
                                <td>$<span class="badge bg-warning fs-5 rounded-pill text-white">10.99</span></td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc6"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tostones con guacamole</td>
                                <td>Plátano verde frito, guacamole<div class="glightbox-desc custom-desc6"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc7"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Calamares fritos</td>
                                <td>Calamares, harina, limón<div class="glightbox-desc custom-desc7"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc8"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Ensalada César</td>
                                <td>Lechuga romana, pollo a la parrilla, crutones, aderezo César<div class="glightbox-desc custom-desc8"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>280</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc9"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Quesadillas de champiñones</td>
                                <td>Champiñones, queso, tortillas de maíz<div class="glightbox-desc custom-desc9"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>210</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc10"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tabla de quesos</td>
                                <td>Quesos variados, mermelada, frutos secos<div class="glightbox-desc custom-desc10"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>320</td>
                                <td>$<span class="badge bg-warning fs-5 rounded-pill text-white">12.99</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="compact"></div>
                    <div class="inner" style="overflow:auto">
                        <div class="text">
                        <table class="table table-borderless" style="min-width:600px">
                            <thead>
                              <tr>
                                <th colspan="6"><h2 class="categoria-menu"><span class="triangulo"></span>Bebidas</h2></th>
                              </tr>

                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" class="glightbox preview-link" data-glightbox="title: Bruschetta; description: .custom-desc1"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/brochetas.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Bruschetta</td>
                                <td>Tomate, ajo, albahaca<div class="glightbox-desc custom-desc1 gdesc-open"><p>Ingredientes: Tomate, ajo, albahaca, queso, jamon, aceitunas</p><p>Calorias: 150</p><p>Precio: $8.99</p></div></td>
                                <td>150</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc2"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Croquetas de jamón</td>
                                <td>Jamón, bechamel, pan rallado<div class="glightbox-desc custom-desc2"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" class="glightbox preview-link" data-glightbox="title: Empanadas de queso; description: .custom-desc3"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/empanadasdequeso.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Empanadas de queso</td>
                                <td>Queso, masa, cebolla<div class="glightbox-desc custom-desc3"><p class="fs-5">Ingredientes: Queso, masa, cebolla</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc4"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/rollitosprimavera.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Rollitos primavera</td>
                                <td>Vegetales, fideos de arroz, salsa agridulce<div class="glightbox-desc custom-desc4"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>190</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$6.99</span></td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc5"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/alitasdepollo.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Alitas de pollo</td>
                                <td>Pollo, salsa barbacoa, especias<div class="glightbox-desc custom-desc5"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>250</td>
                                <td>$<span class="badge bg-warning fs-5 rounded-pill text-white">10.99</span></td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc6"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tostonescoguacamole.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tostones con guacamole</td>
                                <td>Plátano verde frito, guacamole<div class="glightbox-desc custom-desc6"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>180</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$7.99</span></td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc7"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/croquetasdejamon.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Calamares fritos</td>
                                <td>Calamares, harina, limón<div class="glightbox-desc custom-desc7"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>220</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc8"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/ensaladacesar.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Ensalada César</td>
                                <td>Lechuga romana, pollo a la parrilla, crutones, aderezo César<div class="glightbox-desc custom-desc8"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>280</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$8.99</span></td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc9"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/quesadillasdechampinones.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Quesadillas de champiñones</td>
                                <td>Champiñones, queso, tortillas de maíz<div class="glightbox-desc custom-desc9"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>210</td>
                                <td><span class="badge bg-warning fs-5 rounded-pill text-white">$9.99</span></td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td><a href="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" class="glightbox preview-link" data-glightbox="title: Croquetas de jamón; description: .custom-desc10"><div class="col-4"><div class="gallery-item"><img src="https://qrmenu.stw.mx/wp-content/uploads/2023/06/tabladequesos.jpg" alt="" class="" width="60px" /></div></div></a></td>
                                <td>Tabla de quesos</td>
                                <td>Quesos variados, mermelada, frutos secos<div class="glightbox-desc custom-desc10"><p class="fs-5">Ingredientes: Jamón, bechamel, pan rallado</p><p class="fs-5">Calorias: 180</p><p class="fs-5">Precio: $7.99</p></div></td>
                                <td>320</td>
                                <td>$<span class="badge bg-warning fs-5 rounded-pill text-white">12.99</span></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
<!--    
    <div class="time">11:30</div>
    <svg class="battery" viewBox="0 0 25 12">
        <rect opacity="0.35" x="0.5" y="0.833374" width="21" height="10.3333" rx="2.16667" fill="none" stroke="currentColor" />
        <path opacity="0.4" d="M23 4V8C23.8047 7.66122 24.328 6.87313 24.328 6C24.328 5.12687 23.8047 4.33878 23 4" fill="currentColor" />
        <rect x="2" y="2.33337" width="18" height="7.33333" rx="1.33333" fill="currentColor" />
    </svg>
    <svg class="wifi" viewBox="0 0 16 12">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.33045 2.60802C10.5463 2.60811 12.6775 3.45955 14.2835 4.98635C14.4044 5.10422 14.5977 5.10274 14.7168 4.98302L15.8728 3.81635C15.9331 3.75563 15.9667 3.67338 15.9662 3.58779C15.9657 3.50221 15.9311 3.42036 15.8701 3.36035C11.655 -0.679198 5.00522 -0.679198 0.79012 3.36035C0.729062 3.42032 0.694418 3.50215 0.693855 3.58773C0.693292 3.67331 0.726856 3.75558 0.78712 3.81635L1.94345 4.98302C2.06248 5.10292 2.25593 5.10441 2.37679 4.98635C3.98294 3.45945 6.11434 2.60801 8.33045 2.60802ZM8.33045 6.40368C9.54794 6.40361 10.722 6.85614 11.6245 7.67335C11.7465 7.78933 11.9388 7.78682 12.0578 7.66768L13.2125 6.50102C13.2733 6.43982 13.307 6.3568 13.3061 6.27054C13.3052 6.18427 13.2698 6.10196 13.2078 6.04202C10.4596 3.48563 6.20365 3.48563 3.45545 6.04202C3.39338 6.10196 3.35796 6.18432 3.35714 6.27061C3.35633 6.3569 3.39019 6.43991 3.45112 6.50102L4.60545 7.66768C4.72444 7.78682 4.91672 7.78933 5.03879 7.67335C5.94066 6.85668 7.11377 6.40419 8.33045 6.40368ZM10.6434 8.9575C10.6452 9.04401 10.6112 9.12741 10.5495 9.18802L8.55212 11.2037C8.49357 11.2629 8.41374 11.2963 8.33045 11.2963C8.24716 11.2963 8.16734 11.2629 8.10879 11.2037L6.11112 9.18802C6.04941 9.12736 6.01546 9.04394 6.01729 8.95743C6.01912 8.87092 6.05657 8.789 6.12079 8.73102C7.39636 7.65213 9.26455 7.65213 10.5401 8.73102C10.6043 8.78905 10.6417 8.87099 10.6434 8.9575Z" fill="currentColor" />
    </svg>
    <svg class="cellular" viewBox="0 0 18 12">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6665 0.666626H15.6665C15.1142 0.666626 14.6665 1.11434 14.6665 1.66663V10.3333C14.6665 10.8856 15.1142 11.3333 15.6665 11.3333H16.6665C17.2188 11.3333 17.6665 10.8856 17.6665 10.3333V1.66663C17.6665 1.11434 17.2188 0.666626 16.6665 0.666626ZM10.9998 2.99996H11.9998C12.5521 2.99996 12.9998 3.44767 12.9998 3.99996V10.3333C12.9998 10.8856 12.5521 11.3333 11.9998 11.3333H10.9998C10.4476 11.3333 9.99984 10.8856 9.99984 10.3333V3.99996C9.99984 3.44767 10.4476 2.99996 10.9998 2.99996ZM7.33317 5.33329H6.33317C5.78089 5.33329 5.33317 5.78101 5.33317 6.33329V10.3333C5.33317 10.8856 5.78089 11.3333 6.33317 11.3333H7.33317C7.88546 11.3333 8.33317 10.8856 8.33317 10.3333V6.33329C8.33317 5.78101 7.88546 5.33329 7.33317 5.33329ZM2.6665 7.33329H1.6665C1.11422 7.33329 0.666504 7.78101 0.666504 8.33329V10.3333C0.666504 10.8856 1.11422 11.3333 1.6665 11.3333H2.6665C3.21879 11.3333 3.6665 10.8856 3.6665 10.3333V8.33329C3.6665 7.78101 3.21879 7.33329 2.6665 7.33329Z" fill="currentColor" />
    </svg>
</div>
-->
</section>

<?php get_footer(); ?>

<script>
const { to, set, timeline, registerPlugin } = gsap

registerPlugin(ScrollTrigger)

const phoneElem = document.querySelector('#phone')
const timeElem = phoneElem.querySelector('.time')
const contentElem = phoneElem.querySelector('.content')
const articles = contentElem.querySelectorAll('article')

//setTime(timeElem)
//setInterval(() => setTime(timeElem), 3500)

articles.forEach((article, index) => {
    roll(contentElem, article, articles, index)
})

contentElem.addEventListener('scroll', e => {
    if(contentElem.scrollTop > 5000) {
        contentElem.scrollTop = 5000
    }
})

function roll(content, article, articles, index) {
console.log(index)
    let animation = timeline().to(article, {
        '--clip': `${article.offsetHeight}px`,
        '--compact-s': 1,
        '--compact-o': 1,
        duration: 1,
        delay: .05,
        ease: 'none'
    }).to(article, {
        '--border-radius-h': '180px',
        '--border-radius-v': '20px',
        repeat: 1,
        yoyo: true,
        duration: .15,
        onStart() {
            article.style.overflow = 'hidden'
        },
        onComplete() {
            article.style.overflow = 'visible'
        }
    }, 0).to(article, {
        '--article-r': getComputedStyle(article).getPropertyValue('--to-article-r'),
        '--article-x': getComputedStyle(article).getPropertyValue('--to-article-x'),
        '--article-y': getComputedStyle(article).getPropertyValue('--to-article-y'),
        duration: .15
    })

    if(index === 4) {
        animation.to(articles[index - 1], {
            '--article-y': '-64px',
            '--article-r': '-2deg',
            duration: .15
        }, 1.08)
    }

    if(index === 2)  {
        animation.to(articles[index - 2], {
            '--article-y': '-70px',
            duration: .15
        }, 1.14)
        animation.to(articles[index - 1], {
            '--article-y': '-42px',
            '--article-r': '-2deg',
            duration: .15
        }, 1.08)
    }


    if(index === articles.length - 1) {
        animation.to(phoneElem, {
            '--empty-mask': '0%',
            duration: .3
        })
    }

    return ScrollTrigger.create({
        animation,
        trigger: article,
        scroller: content,
        scrub: true,
        start: `top top+=184`,
        end: `bottom top+=112`
    })
}

/*
function setTime(elem) {
    elem.textContent = new Date().toLocaleTimeString('en-US', {
        hour12: false,
        hour: 'numeric',
        minute: 'numeric',
    })
}
*/
// Keep same progress after resize (Thanks to https://codepen.io/ZachSaucier)
const progressST = ScrollTrigger.create({
    scroller: contentElem,
    start: 0,
    end: 5000
})

let oldProgress

ScrollTrigger.addEventListener('refreshInit', () => {
    oldProgress = progressST.progress
    contentElem.scrollTop = 0
})

ScrollTrigger.addEventListener('refresh', () => {
    progressST.scroll(oldProgress * 5000)
})
</script>