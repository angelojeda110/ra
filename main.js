// Crear una escena
// Crear una escena
var scene = new THREE.Scene();

// Crear una cámara
var camera = new THREE.PerspectiveCamera(75, 1.5, 0.1, 1000);



// Crear un renderizador
var renderer = new THREE.WebGLRenderer({canvas: document.getElementById("canvas"), antialias: true});
renderer.setSize(3000, 1500);

// Añadir una luz ambiente
var ambientLight = new THREE.AmbientLight(0x404040);
scene.add(ambientLight);

// Crear un cubo con textura 360
var geometry = new THREE.SphereGeometry(1, 32, 32);
var texture = new THREE.TextureLoader().load("1.jpg");
var material = new THREE.MeshBasicMaterial({map: texture, side: THREE.BackSide});
var sphere = new THREE.Mesh(geometry, material);
scene.add(sphere);

// Añadir controles de órbita para moverse en el visor de imágenes 360
var controls = new THREE.OrbitControls(camera, renderer.domElement);
controls.enableZoom = false;

// Función para moverse hacia adelante
function moveForward() {
  camera.translateZ(-0.1);
}

// Función para moverse hacia atrás
function moveBackward() {
  camera.translateZ(0.1);
}

// Función para moverse hacia la izquierda
function moveLeft() {
  camera.translateX(-0.1);
}

// Función para moverse hacia la derecha
function moveRight() {
  camera.translateX(0.1);
}

// Función para moverse hacia arriba
function moveUp() {
  camera.translateY(0.1);
}

// Función para moverse hacia abajo
function moveDown() {
  camera.translateY(-0.1);
}

// Eventos de teclado para moverse en el visor de imágenes 360
window.addEventListener("keydown", function(event) {
  switch (event.key) {
    case "ArrowUp":
      moveForward();
      break;
    case "ArrowDown":
      moveBackward();
      break;
    case "ArrowLeft":
      moveLeft();
      break;
    case "ArrowRight":
      moveRight();
      break;
    case "PageUp":
      moveUp();
      break;
    case "PageDown":
      moveDown();
      break;
  }
});

// Renderizar la escena
function animate() {
  requestAnimationFrame(animate);
  renderer.render(scene, camera);
}

animate();










