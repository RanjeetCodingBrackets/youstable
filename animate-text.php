<style>
    :root {
  --bg: hsl(0 0% 2%);
  --color: hsl(0 0% 100% / 0.1);
  --underline-width: 1lh;
  --underline-block-width: 250vmax;
  --underline-color: hsl(0 0% 50% / 0.15);
  --underline-color-hover: hsl(180 100% 50% / 1);
  --underline-transition: 5s;
  --finish-fill: hsl(0 0% 100%);
  --accent: hsl(0 0% 100%);
  --fill: hsl(0 0% 50%);
}

.dsdd {
 
  font-weight: bold;
  accent-color: red;
  overflow-x: hidden;
  font-weight: 120;
}

:root:has(#driver:checked) main {
	outline: 1rem dashed hsl(0 80% 50% / 0.5);
	background: hsl(0 80% 50% / 0.1);
}

 

 

.controls {
  position: fixed;
  top: 1rem;
  right: 1rem;
  padding: 1rem 2rem;
  border-radius: 100px;
  z-index: 2;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background: hsl(0 0% 90%);
  color: hsl(0 0% 10%);
}

.text-p{
  resize: both;
  /*max-width: 70vw;*/
  /*overflow: hidden;*/
  /*padding: 10ch;*/
	margin: 0;
	text-align:center;
}

.text-p > span {
    outline-color: hsl(10 80% 50%);
    outline-offset: 1ch;
    font-size: 50px;
    color: var(--color);
    text-decoration: none;
    background-image: /* First one is the highlight */ linear-gradient(90deg, #6b46f2 calc(100% - 8ch), hsl(252.8deg 87.21% 66.27%) calc(100% - 8ch)), linear-gradient(90deg, hsl(252.91deg 100.87% 61.18%), hsl(252.96deg 100% 60.98%)), linear-gradient(90deg, hsl(0deg 0% 67.12%), hsl(0deg 0% 86.8%));
    background-size: var(--underline-block-width) var(--underline-width),
  	var(--underline-block-width) var(--underline-width),
    100% var(--underline-width);
    background-repeat: no-repeat;
    background-position-x: 0;
    background-position-y: 100%;
    background-clip: text;
    color: var(--finish-fill);
    font-weight: 400;
}
/*p > span {
  background-clip: unset;
  color: transparent;
  background-position-x: -200vmax, -200vmax, 0;
  animation: fill-up 4s infinite linear;
}

@keyframes fill-up {
  to { background-position-x: 0, 0, 0; }
}*/

main {
  height: 100vh;
}

.section-p {
    position: sticky;
    top: 37px;
     height: 55vh; 
    /* width: 100vw; */
    display: grid;
    place-items: center;
}

@supports (animation-timeline: scroll()) {
  @media (prefers-reduced-motion: no-preference) {
    main {
      view-timeline-name: --section;
    }
    
   .text-p > span {
      background-position-x:
        calc(var(--underline-block-width) * -1),
        calc(var(--underline-block-width) * -1),
        0;
      color: transparent;
      animation-name: fill-up, color-in;
      animation-fill-mode: both;
animation-timing-function: ease-in;
            animation-timeline: --section;
            animation-range: entry 22% cover 81%, cover 71% exit 97%;
    }

    @keyframes fill-up {
    	to { background-position-x: 0, 0, 0; }
    }

    @keyframes color-in {
    	to { color: var(--finish-fill); }
    }
  }
}
.text-p > span {
  animation-name: fill-up 10s infinite linear, color-in 10s linear;
  /* Other styles remain the same */
}

</style>

<body class="dsdd">
 <div class="cont"></div>
    <main>
      <section class="section-p">
        <p class="text-p">
          <span contenteditable=true>Experience's top-rated SMB Hosting provider with a <em class="fw-bold" style="color:#6B46F2;">4.7-star rating</em> powering websites from over 200 countries.</span>
        </p>
      </section>
    </main>
 
    
    
</body>
    
    
    
  <script src="js/gsap/gsap.min.js"></script>
<script src="js/gsap/ScrollTrigger.min.js"></script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    if (!CSS.supports('animation-timeline: scroll()') && matchMedia('(prefers-reduced-motion: no-preference)')) {
        const scrub = 2;
        const trigger = 'main';

        gsap.set('p > span', {
            '--progress': 0,
            backgroundPositionX: 'calc(-50vmax + (var(--progress) * 50vmax)), calc(-200vmax + (var(--progress) * 50vmax)), 0',
            color: 'transparent',
        });

        gsap.to('p > span', {
  '--progress': 1,
  duration: 10, // Adjust the duration to match the CSS animation
  scrollTrigger: {
    trigger,
    scrub: 1, // Adjust the scrub value as needed
    start: 'top top',
    end: 'top top-=40%'
  }
});

gsap.to('p > span', {
  color: 'white',
  duration: 10, // Adjust the duration to match the CSS animation
  scrollTrigger: {
    trigger,
    scrub: 1, // Adjust the scrub value as needed
    start: 'top top-=40%',
    end: 'bottom bottom'
  }
});
    }
</script>
