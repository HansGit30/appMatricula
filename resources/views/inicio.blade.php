@extends('layouts.ini')

@section('content')
    <section class="hero-section">

        <div class="hero-banner">
            <img src="{{ asset('img1.webp') }}" alt="Estudiantes GE DUCATO" class="hero-image">
            <div class="hero-admission-block">
                <div class="admission-content">
                    <span class="admission-countdown">CIERRE DE INSCRIPCIONES: 10 DE JULIO</span>
                    <h2 class="admission-title">EXAMEN DE ADMISIÓN</h2>
                    <p class="admission-date">19 DE JULIO</p>
                    <hr class="admission-divider">
                    <a href="#" class="btn-admission-hero">¡INGRESA AQUÍ!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content-den">
        <div class="container-den">

            <!-- Sección Superior: Proyectos de Odontología -->
            <section class="dental-section">
                <div class="dental-title">
                    <h2>Proyectos de investigación dental</h2>
                </div>
                <div class="dental-text">
                    <p>Estudiantes graduados de la Facultad de Medicina Dental presentaron avances científicos enfocados en
                        inteligencia artificial aplicada, cuidado clínico avanzado, salud global preventiva y
                        bionanotecnología.</p>
                </div>
                <div class="dental-image">
                    <img src="{{ asset('img3.webp') }}" alt="Estudiantes de odontología en laboratorio">
                </div>
            </section>

            <!-- Sección Inferior Principal: Reportaje Ficticio -->
            <section class="main-feature-section">
                <div class="feature-content">
                    <h1>Conectando entornos urbanos con la esperanza de vida</h1>
                    <p class="feature-description">
                        Mateo Benavídez obtuvo el Premio de Excelencia de la <strong>Universidad Central</strong> por su
                        tesis de grado enfocada en cómo la infraestructura de los barrios periféricos influye directamente
                        en el desarrollo socioeconómico de las familias. Su investigación diseñó los primeros modelos
                        predictivos de movilidad financiera intergeneracional en América Latina.
                    </p>
                    <a href="#" class="btn-link">
                        <span class="icon-arrow">→</span> Explorar todos los proyectos ganadores
                    </a>
                </div>

                <!-- Miniatura de Video / Imagen con Overlay -->
                <div class="feature-video-thumbnail">
                    <img src="{{ asset('img2.webp') }}" alt="Mateo Benavídez presentando tesis">
                    <div class="video-overlay">
                        <button class="play-button">
                            <svg viewBox="0 0 24 24" width="24" height="24">
                                <polygon points="8,5 19,12 8,19" fill="white" />
                            </svg>
                        </button>
                        <span>Ver la presentación de Mateo Benavídez</span>
                    </div>
                </div>
            </section>

        </div>
    </section>

    <section class="hero-celebration-section">
    
    <img src="{{ asset('img4.webp') }}" alt="Celebración de Graduación" class="hero-bg-image">
    
    <div class="hero-overlay-blue"></div>

    <div class="hero-content">
        <h1 class="hero-main-title">Celebrando a la Clase de 2026</h1>
        
        <a href="#" class="btn-hero-link">
            <span class="icon-circle-arrow">→</span> Revive la ceremonia de graduación
        </a>
    </div>

</section>

<section class="research-list-section">
    <div class="research-row">
        <div class="research-title">
            <h3>Avances en la teoría evolutiva</h3>
        </div>
        <div class="research-description">
            <p>La tesis de licenciatura de Laura Bartel, que estudió familias de charas de Florida, produjo una de las primeras mediciones directas de mutaciones de ADN a gran escala en un vertebrado silvestre.</p>
        </div>
        <div class="research-image">
            <img src="{{ asset('img7.webp') }}" alt="Laura Bartel">
        </div>
    </div>

    <div class="research-row">
        <div class="research-title">
            <h3>Datación de asentamientos históricos</h3>
        </div>
        <div class="research-description">
            <p>La disertación de Andrés Bair se centró en los fuertes circulares, el tipo de sitio arqueológico más numeroso en Irlanda. Su investigación desafía la cronología aceptada de los asentamientos medievales.</p>
        </div>
        <div class="research-image">
            <img src="{{ asset('img5.webp') }}" alt="Andrés Bair">
        </div>
    </div>

    <div class="research-row">
        <div class="research-title">
            <h3>Investigando el sesgo en la IA</h3>
        </div>
        <div class="research-description">
            <p>Para su galardonada tesis de grado, Gauri Sood exploró los sesgos de género, raza y edad que poseen los modelos populares de inteligencia artificial generadora de imágenes actuales.</p>
        </div>
        <div class="research-image">
            <img src="{{ asset('img6.webp') }}" alt="Gauri Sood">
        </div>
    </div>
</section>
@endsection
