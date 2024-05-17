function showExercises(type) {
    const exerciseList = document.getElementById('exercise-list');
    const exerciseVideo = document.getElementById('exercise-video');
    let exercises = '';
  
    if (type === 'weight-loss') {
      exercises = `
        <h3>Ejercicios para Pérdida de Peso</h3>
        <ul>
          <li onclick="showVideo('cardio-hit')">Cardio HIIT</li>
          <li onclick="showVideo('500-calorias')">500 Calorías</li>
          <li onclick="showVideo('1000-calorias')">1000 Calorías</li>
          <li onclick="showVideo('rutina-matutina')">Rutina Matutina</li>
          <li onclick="showVideo('10-minutos-cardio')">10 Minutos de Cardio</li>
        </ul>
      `;
    } else if (type === 'legs-glutes') {
      exercises = `
        <h3>Ejercicios para Piernas y Glúteos</h3>
        <ul>
          <li onclick="showVideo('50-sentadillas')">50 Sentadillas</li>
          <li onclick="showVideo('adelgazar-piernas')">Adelgazar Piernas</li>
          <li onclick="showVideo('8-minutos')">8 Minutos</li>
          <li onclick="showVideo('reto-30-dias')">Reto 30 Días</li>
        </ul>
      `;
    } else if (type === 'relax-stretch') {
      exercises = `
        <h3>Ejercicios de Relajación y Estiramientos</h3>
        <ul>
          <li onclick="showVideo('relajar-cuerpo')">Relajar Todo el Cuerpo</li>
        </ul>
      `;
    }
  
    exerciseList.innerHTML = exercises;
    exerciseVideo.innerHTML = '';
  }
  
  function showVideo(exercise) {
    const exerciseVideo = document.getElementById('exercise-video');
    let videoSrc = '';
  
    switch (exercise) {
      case 'cardio-hit':
        videoSrc = 'https://www.youtube.com/embed/jIKUw5avFpU?si=ZakLen45NDMEildt';
        break;
      case '500-calorias':
        videoSrc = 'https://www.youtube.com/embed/tzY5gk7vVEo?si=ibUPR4vyxeWUrhEv';
        break;
      case '1000-calorias':
        videoSrc = 'https://www.youtube.com/embed/tzY5gk7vVEo?si=ibUPR4vyxeWUrhEv';
        break;
      case 'rutina-matutina':
        videoSrc = 'https://www.youtube.com/embed/JKu2d0O3gNs?si=hX3XMGp7f1umFnI-';
        break;
      case '10-minutos-cardio':
        videoSrc = 'https://www.youtube.com/embed/UzLXOp8ZMRw?si=mkSorsMXBpJLmPmi';
        break;
      case '50-sentadillas':
        videoSrc = 'https://www.youtube.com/embed/a2lXwR-7kD4?si=6uN2MVefO5FtztJ9';
        break;
      case 'adelgazar-piernas':
        videoSrc = 'https://www.youtube.com/embed/6UCQPfJvouA?si=CmJsGr6FIozy4mWQ';
        break;
      case '8-minutos':
        videoSrc = 'https://www.youtube.com/embed/N9yRkiq_RX8?si=OovYRNwXY6KeXG3h';
        break;
      case 'reto-30-dias':
        videoSrc = 'https://www.youtube.com/embed/6UCQPfJvouA?si=CmJsGr6FIozy4mWQ';
        break;
      case 'relajar-cuerpo':
        videoSrc = 'https://www.youtube.com/embed/W9Q4xxi9blI?si=FezwXkVws9ap6j7B';
        break;
    }
  
    if (videoSrc) {
      exerciseVideo.innerHTML = `
        <iframe width="560" height="315" src="${videoSrc}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      `;
    } else {
      exerciseVideo.innerHTML = `<p>Video no disponible</p>`;
    }
  }
  
  // JavaScript para el menú desplegable
  document.addEventListener('DOMContentLoaded', function() {
    const navMenu = document.getElementById('nav-menu');
    const navToggle = document.getElementById('nav-toggle');
    const navClose = document.getElementById('nav-close');
  
    // Mostrar menú
    if (navToggle && navMenu) {
      navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu');
      });
    }
  
    // Ocultar menú
    if (navClose && navMenu) {
      navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
      });
    }
  });
  