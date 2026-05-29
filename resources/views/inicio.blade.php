@extends('layouts.ini')

@section('content')
    

  <section class="hero">
    <div class="hero-content">
      <span class="hero-subtitle">SISTEMA ACADÉMICO DE MATRÍCULA</span>
      <h1 class="hero-title">La educación es la mejor<br>clave del éxito en la vida</h1>
      <p class="hero-text">Gestiona tus asignaturas de manera ágil y segura. Accede mediante tus cuentas institucionales o redes sociales para iniciar tu proceso de inscripción.</p>
      
      @guest
        <div class="hero-auth-buttons" style="display: flex; gap: 15px; margin-top: 20px;">
          <a href="{{ url('/login/google') }}" class="btn-primary" style="text-decoration: none; text-align: center; background-color: #de4935;">
            Acceder con Google
          </a>
          <a href="{{ url('/login/github') }}" class="btn-primary" style="text-decoration: none; text-align: center; background-color: #333333;">
            Acceder con GitHub
          </a>
           
        </div>
      @endguest
    </div>

    <div class="hero-cards">
      <div class="card card-blue">
        <div class="card-icon">📚</div>
        <h3>Gestión de Cursos</h3>
        <p>Explora la malla curricular y selecciona tus créditos académicos del semestre.</p>
        <a href="#">Ver Cursos →</a>
      </div>
      <div class="card card-orange">
        <div class="card-icon">⏱️</div>
        <h3>Horarios Flexibles</h3>
        <p>Planifica tus bloques horarios semanales y aulas de manera óptima.</p>
        <a href="#">Ver Horarios →</a>
      </div>
      <div class="card card-blue">
        <div class="card-icon">👨‍🏫</div>
        <h3>Plana Docente</h3>
        <p>Aprende de profesores con amplia experiencia y especialización en el sector.</p>
        <a href="#">Ver Profesores →</a>
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="about-images">
      <div class="image-box box-large">
        <div class="badge-experience">
          <h2>API</h2>
          <p>RESTful Integrada</p>
        </div>
      </div>
      <div class="image-box box-small"></div>
    </div>

    <div class="about-content">
      <span class="section-subtitle">PLATAFORMA TECNOLÓGICA</span>
      <h2 class="section-title">Unas Palabras Sobre la Universidad</h2>
      <p class="about-text-highlight">Nuestra institución se dedica a desarrollar talentos dinámicos, flexibles e innovadores para superar los desafíos del mañana.</p>
      <p class="about-text-secondary">Con nuestro nuevo backend en Laravel 12, los procesos de matrícula ahora se ejecutan de manera inmediata, vinculando de forma nativa tus horarios, notas y carga académica.</p>
       
      <div class="about-features">
        <div class="feature-item">
          <div class="feature-icon">⚡</div>
          <div>
            <h4>Autenticación Centralizada</h4>
            <p>Inicia sesión sin contraseñas manuales utilizando tus perfiles de desarrollador u organización educativa.</p>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon">📊</div>
          <div>
            <h4>Seguimiento de Calificaciones</h4>
            <p>Revisa el estado de tus actas y consolidados finales ("aprobado", "reprobado", "cursando") al instante.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


