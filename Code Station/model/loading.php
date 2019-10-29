<div class="loader">
   <!-- <img src="loading.gif" alt="Loading..." />-->
<div class='container'>
  <div class='loading-overlay'></div>
  <div class='loading-anim'>
    <div class='border out'></div>
    <div class='border in'></div>
    <div class='border mid'></div>
    <div class='circle'>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
      <span class='dot'></span>
    </div>
  </div>
</div>
<style>

.container {
  margin: 20px;
  width: calc(100% - 40px);
  height: auto;
}

.loading-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0);
  transition: background-color .2s ease-out;
}

.loading-anim {
  position: relative;
  width: 200px;
  height: 200px;
  margin: auto;
  perspective: 800px;
  transform-style: preserve-3d;
  transform: translateZ(-100px) rotateY(-90deg) rotateX(90deg) rotateZ(90deg) scale(0.5);
  opacity: 0;
  transition: all .2s ease-out;
}
.loading-anim .circle {
  width: 100%;
  height: 100%;
  animation: spin 5s linear infinite;
}
.loading-anim .border {
  position: absolute;
  border-radius: 50%;
  border: 3px solid #333; //cor
}
.loading-anim .out {
  top: 15%;
  left: 15%;
  width: 70%;
  height: 70%;
  border-left-color: transparent;
  border-right-color: transparent;
  animation: spin 2s linear reverse infinite;
}
.loading-anim .in {
  top: 18%;
  left: 18%;
  width: 64%;
  height: 64%;
  border-top-color: transparent;
  border-bottom-color: transparent;
  animation: spin 2s linear infinite;
}
.loading-anim .mid {
  top: 40%;
  left: 40%;
  width: 20%;
  height: 20%;
  border-left-color: transparent;
  border-right-color: transparent;
  animation: spin 1s linear infinite;
}

.loading .loading-anim {
  transform: translateZ(0) rotateY(0deg) rotateX(0deg) rotateZ(0deg) scale(1);
  opacity: 1;
}

.loading .loading-overlay {
  background: rgba(255, 255, 255, 0.5);
}

.dot {
  position: absolute;
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-color: #333; //cor
  animation: jitter 5s ease-in-out infinite, fade-in-out 5s linear infinite;
}

.dot:nth-child(1) {
  top: 90px;
  left: 180px;
  animation-delay: 0s;
}

.dot:nth-child(2) {
  top: 135px;
  left: 168px;
  animation-delay: 0.41667s;
}

.dot:nth-child(3) {
  top: 168px;
  left: 135px;
  animation-delay: 0.83333s;
}

.dot:nth-child(4) {
  top: 180px;
  left: 90px;
  animation-delay: 1.25s;
}

.dot:nth-child(5) {
  top: 168px;
  left: 45px;
  animation-delay: 1.66667s;
}

.dot:nth-child(6) {
  top: 135px;
  left: 12px;
  animation-delay: 2.08333s;
}

.dot:nth-child(7) {
  top: 90px;
  left: 0px;
  animation-delay: 2.5s;
}

.dot:nth-child(8) {
  top: 45px;
  left: 12px;
  animation-delay: 2.91667s;
}

.dot:nth-child(9) {
  top: 12px;
  left: 45px;
  animation-delay: 3.33333s;
}

.dot:nth-child(10) {
  top: 0px;
  left: 90px;
  animation-delay: 3.75s;
}

.dot:nth-child(11) {
  top: 12px;
  left: 135px;
  animation-delay: 4.16667s;
}

.dot:nth-child(12) {
  top: 45px;
  left: 168px;
  animation-delay: 4.58333s;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@keyframes jitter {
  0% {
    transform: scale(1, 1);
  }
  25% {
    transform: scale(0.7, 0.7);
  }
  50% {
    transform: scale(1, 1);
  }
  75% {
    transform: scale(1.3, 1.3);
  }
  100% {
    transform: scale(1, 1);
  }
}
@keyframes fade-in-out {
  0% {
    opacity: 0.8;
  }
  25% {
    opacity: 0.2;
  }
  75% {
    opacity: 1;
  }
  100% {
    opacity: 0.8;
  }
}
</style>
<script>
    
    document.querySelector("html").classList.toggle("loading");
</script>
</div>
<style type="text/css">
	.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 30%;
    height:30%;
}

.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}
    .preload{
        width:55%;
        height:55%;
        margin-left:18%;
    }
       

</style>

<script type="text/javascript">
	window.addEventListener("load", function () { // função de carregamento(load)
    const loader = document.querySelector(".loader"); // puxo a classe loader do html
    loader.className += " hidden"; // Escondo a classe loader após o carregamento
});
</script>