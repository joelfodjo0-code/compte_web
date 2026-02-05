<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite(['resources/css/global.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <div class="app-container">
    <div class="sidebar">
        <h3>
            <img src="{{ asset('images/Frame.jpg') }}" alt="Logo Koum'a FIN" class="logo">
            Koum'a FIN
        </h3>

        <div class="solde-box">
        <div class="solde-top">Solde actuel</div>
        <div class="solde-bottom">5 000 000 XOF</div>
       <div class="solde-arrow">
  <svg xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      fill="currentColor"
      fill-rule="evenodd"
      d="M10 13.333a.831.831 0 0 1-.59-.244l-5-5A.832.832 0 1 1 5.59 6.911l4.41 4.41 4.411-4.41a.832.832 0 1 1 1.178 1.178l-5 5a.831.831 0 0 1-.589.244Z"
      clip-rule="evenodd"
    />
  </svg>
</div>

        </div>

        <div class="menu">
        <div class="menu-title">MENU PRINCIPAL</div>
           <a href="{{ route('tableau') }}"
   class="{{ request()->routeIs('tableau') ? 'active' : '' }}"> <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" > <path stroke="currentColor" stroke-width="1.5" d="M18.333 10a8.333 8.333 0 1 0-16.667 0 8.333 8.333 0 0 0 16.667 0Z" /> <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m10.333 6.915 2.433-.811c.739-.246 1.108-.37 1.303-.174.195.195.072.564-.174 1.302l-.811 2.434c-.42 1.258-.63 1.887-1.08 2.339-.452.45-1.081.66-2.34 1.08l-2.433.811c-.739.246-1.108.37-1.303.174-.195-.194-.072-.564.175-1.302l.81-2.434c.42-1.258.63-1.887 1.081-2.338.451-.452 1.08-.661 2.34-1.081Z" /> <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 10-.005.005" />
         </svg> Vue d’ensemble </a>
        <a href="{{ route('solde') }}"
   class="{{ request()->routeIs('solde') ? 'active' : '' }}">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-width="1.5"
      d="M10 16.25c-1.111.519-2.57.833-4.167.833-.889 0-1.734-.097-2.5-.272-1.318-.302-1.667-1.078-1.667-2.323V5.512c0-.821.867-1.385 1.667-1.201.766.175 1.611.272 2.5.272 1.597 0 3.056-.314 4.166-.833 1.11-.519 2.57-.833 4.167-.833.888 0 1.734.097 2.5.273 1.318.301 1.667 1.077 1.667 2.322v8.976c0 .821-.867 1.385-1.667 1.202a11.257 11.257 0 0 0-2.5-.273c-1.598 0-3.056.314-4.167.833Z"
    />
    <path
      stroke="currentColor"
      stroke-width="1.5"
      d="M12.083 10a2.083 2.083 0 1 1-4.167 0 2.083 2.083 0 0 1 4.167 0Z"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M4.584 10.833v.008M15.416 9.16v.008" />
    </svg>Solde</a>

  <a href="{{ route('transactions') }}"
   class="{{ request()->routeIs('transactions') ? 'active' : '' }}">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="m3.816 7.172-2.15-.127C3.206 3.087 7.631.833 11.944 1.954c4.594 1.194 7.322 5.764 6.094 10.208-1.015 3.676-4.42 6.114-8.165 6.171"
    />
    <path
      stroke="currentColor"
      stroke-dasharray="0.5 3"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M10 18.333c-4.584 0-8.334-4.166-8.334-9.166"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M11.336 8.101c-.293-.307-1.011-1.03-2.146-.517-1.134.513-1.314 2.164.402 2.34.775.079 1.28-.092 1.744.392.463.485.549 1.832-.635 2.195-1.183.363-1.95-.237-2.156-.424m1.377-5.404v.66m0 5.28v.727"/>
    </svg>Transactions</a>

        <a href="{{ route('client') }}"
   class="{{ request()->routeIs('client') ? 'active' : '' }}">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-width="1.5"
      d="M10.833 5.833a3.333 3.333 0 1 1-6.667 0 3.333 3.333 0 0 1 6.667 0Z"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M12.5 9.167a3.333 3.333 0 0 0 0-6.667"
    />
    <path
      stroke="currentColor"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M9.166 11.667H5.833a4.167 4.167 0 0 0-4.167 4.166c0 .92.746 1.667 1.667 1.667h8.333c.92 0 1.667-.746 1.667-1.667a4.167 4.167 0 0 0-4.167-4.166Z"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M14.166 11.667a4.167 4.167 0 0 1 4.167 4.166c0 .92-.746 1.667-1.667 1.667h-1.25"
    />
  </svg>Clients</a>

    <a href="{{ route('catalogue') }}"
   class="{{ request()->routeIs('catalogue') ? 'active' : '' }}">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M10 17.5c.233 0 .45-.106.882-.318l3.477-1.704c1.539-.754 2.308-1.131 2.308-1.728v-7.5M10.001 17.5c-.233 0-.45-.106-.882-.318l-3.477-1.704c-1.539-.754-2.308-1.131-2.308-1.728v-7.5m6.667 11.25V10"
    />
    <path
      stroke="currentColor"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M9.12 2.818c.432-.212.648-.318.88-.318.233 0 .45.106.882.318l3.477 1.704c1.539.754 2.308 1.131 2.308 1.728s-.769.974-2.308 1.728l-3.477 1.704c-.432.212-.649.318-.881.318-.233 0-.45-.106-.882-.318L5.642 7.978C4.103 7.224 3.334 6.847 3.334 6.25s.77-.974 2.308-1.728l3.477-1.704Z"
    />
  </svg>Catalogue</a>

           <a href="#">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-width="1.5"
      d="M5.834 14.167v-3.334M10 14.167V5.833M14.166 14.167v-5"
    />
    <path
      stroke="currentColor"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M2.084 10c0-3.732 0-5.598 1.16-6.757 1.159-1.16 3.025-1.16 6.757-1.16 3.732 0 5.598 0 6.757 1.16 1.16 1.16 1.16 3.025 1.16 6.757 0 3.732 0 5.598-1.16 6.757-1.16 1.16-3.025 1.16-6.757 1.16-3.732 0-5.598 0-6.758-1.16-1.159-1.16-1.159-3.025-1.159-6.757Z"
    />
  </svg>Rapports</a>

            <a href="#">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-width="1.5"
      d="M13.334 11.667a1.25 1.25 0 1 0 2.5 0 1.25 1.25 0 0 0-2.5 0Z"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-width="1.5"
      d="M8.333 5.833h5c2.357 0 3.535 0 4.267.733.733.732.733 1.91.733 4.267V12.5c0 2.357 0 3.535-.733 4.268-.732.732-1.91.732-4.267.732h-5c-3.143 0-4.714 0-5.69-.976-.977-.977-.977-2.548-.977-5.69V9.166c0-3.143 0-4.714.976-5.69C3.62 2.5 5.19 2.5 8.332 2.5h3.334c.775 0 1.162 0 1.48.085a2.5 2.5 0 0 1 1.768 1.768c.085.318.085.705.085 1.48"
    />
  </svg>Paiements</a>

            <a href="#">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M3.334 15.538V6.712c0-2.378 0-3.568.732-4.306.732-.74 1.911-.74 4.268-.74h3.333c2.357 0 3.536 0 4.268.74.732.738.732 1.928.732 4.306v8.826c0 1.26 0 1.89-.385 2.138-.629.405-1.601-.445-2.09-.753-.405-.255-.607-.383-.83-.39-.243-.008-.449.114-.886.39l-1.592 1.004c-.43.27-.644.406-.883.406-.24 0-.454-.135-.884-.406l-1.592-1.004c-.404-.255-.606-.383-.83-.39-.243-.008-.449.114-.885.39-.49.308-1.462 1.158-2.091.753-.385-.248-.385-.878-.385-2.138ZM9.166 9.167h-2.5M11.666 5.833h-5"
    />
  </svg>Factures</a>

            
        <div class="menu-title">Autres</div>
            <a href="#">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M12.647 18.333v-.841a.84.84 0 0 1 .837-.825h.063a2.527 2.527 0 0 0 2.46-1.99l.01-.044.432-2.133.785-.387c.42-.207.63-.31.675-.5.045-.19-.095-.375-.377-.745l-1.59-2.09c-.158-.208-.237-.312-.28-.422-.042-.11-.055-.266-.08-.578-.287-3.422-3.194-6.111-6.738-6.111-3.733 0-6.76 2.984-6.76 6.666 0 2.292 1.172 4.313 2.958 5.513m0 0v4.487m0-4.487a6.772 6.772 0 0 0 1.69.822"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="m11.666 7.5.767.66c.322.279.483.417.483.59s-.161.311-.483.59l-.767.66M5.834 7.5l-.767.66c-.322.279-.483.417-.483.59s.161.311.483.59l.767.66M9.583 6.667l-1.667 4.166"
    />
  </svg>Développeurs</a>

            <a href="#">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M18.304 3.755s.147-1.487-.212-1.846m0 0c-.361-.361-1.846-.211-1.846-.211m1.846.21-2.258 2.259M18.304 16.245s.147 1.487-.212 1.846m0 0c-.361.361-1.846.211-1.846.211m1.846-.21-2.258-2.259M1.908 1.909l2.258 2.258M1.908 1.909c.361-.361 1.846-.211 1.846-.211m-1.846.21c-.359.36-.212 1.847-.212 1.847M1.908 18.091l2.258-2.258m-2.258 2.258c.361.361 1.846.211 1.846.211m-1.846-.21c-.359-.36-.212-1.847-.212-1.847"
    />
    <path
      stroke="currentColor"
      stroke-width="1.5"
      d="M15.833 10a5.833 5.833 0 1 1-11.667 0 5.833 5.833 0 0 1 11.667 0Z"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-width="1.5"
      d="M9.929 7.751c-.92 0-1.595.535-1.595 1.156 0 .621.435 1.01 1.667 1.01 1.357 0 1.666.618 1.666 1.24 0 .62-.593 1.11-1.738 1.11m0-4.516c.726 0 1.11.254 1.412.596M9.93 7.751v-.704m0 5.22c-.726 0-1.008-.143-1.408-.504m1.408.505v.656"
    />
  </svg>Affiliés</a>

            <a href="#">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="1.5"
      d="M2.5 5.833H5M2.5 14.167h5M15 14.167h2.5M12.5 5.833h5"
    />
    <path
      stroke="currentColor"
      stroke-width="1.5"
      d="M5 5.833c0-.776 0-1.165.127-1.47.169-.41.493-.734.902-.903.306-.127.694-.127 1.471-.127.777 0 1.165 0 1.471.127.409.17.733.494.902.902.127.306.127.695.127 1.471 0 .777 0 1.165-.127 1.471-.169.409-.493.733-.902.902-.306.127-.694.127-1.471.127-.777 0-1.165 0-1.471-.127a1.667 1.667 0 0 1-.902-.902C5 6.998 5 6.61 5 5.834ZM10 14.167c0-.777 0-1.165.127-1.472.169-.408.493-.732.902-.902.306-.126.694-.126 1.471-.126.777 0 1.165 0 1.471.127.409.169.733.493.902.901.127.307.127.695.127 1.472 0 .776 0 1.165-.127 1.47-.169.41-.493.734-.902.903-.306.127-.694.127-1.471.127-.777 0-1.165 0-1.471-.127a1.667 1.667 0 0 1-.902-.902C10 15.332 10 14.943 10 14.167Z"
    />
  </svg>Paramètres</a>

            <a href="#">
  <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path
      stroke="currentColor"
      stroke-width="1.5"
      d="M18.333 10a8.333 8.333 0 1 0-8.334 8.333c.702 0 1.667.097 1.667-.833 0-.508-.264-.899-.526-1.288-.384-.57-.764-1.133-.307-2.045.555-1.111 1.481-1.111 2.9-1.111.71 0 1.544 0 2.516-.14C18 12.667 18.333 11.59 18.333 10Z"
    />
    <path
      stroke="currentColor"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="m5.834 12.502.007-.002"
    />
    <circle cx="7.916" cy="7.083" r="1.25" stroke="currentColor" stroke-width="1.5" />
    <circle cx="13.75" cy="7.917" r="1.25" stroke="currentColor" stroke-width="1.5" />
  </svg> Personnalisation</a>

    </div>
    </div>

    <div class="main">
        <div class="header">
        <div class="left-group">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="header-icon" width="22" height="25" viewBox="0 0 16.5 12.375" >
        <path
            fill="#202224"
            d="M0 0h16.5v1.375H0V0Zm0 5.5h16.5v1.375H0V5.5ZM0 11h16.5v1.375H0V11Z"
        />
        </svg>
        <div class="search-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="search-icon">
        <g stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" opacity="0.5">
            <path d="M9.144 11.986A5.37 5.37 0 1 0 4.943 2.1a5.37 5.37 0 0 0 4.201 9.886Z" clip-rule="evenodd"/>
            <path d="m10.84 10.84 4.165 4.167"/>
        </g>
        </svg>
            <input type="text" class="search" placeholder="Rechercher...">
           
            </div>
        </div>
            <div class="right-group">
        <div class="mode-test">
            <span class="label">Mode Test</span>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider">
                   <span class="arrow">✔️</span>
                </span>
            </label>
        </div>
    <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" 
         width="20" height="20" 
         viewBox="0 0 20 20" 
         fill="none">
        <path
            fill="currentColor"
            stroke="currentColor"
            stroke-width="0.023"
            d="M10 1.262a8.739 8.739 0 1 1-.001 17.477A8.739 8.739 0 0 1 10 1.262Zm0 1.46A7.279 7.279 0 1 0 17.277 10 7.279 7.279 0 0 0 10 2.724Zm0 10.805a.77.77 0 1 1 0 1.539.77.77 0 0 1 0-1.539Zm0-8.125c.818 0 1.588.28 2.172.792.607.531.941 1.245.94 2.01 0 1.123-.741 2.134-1.89 2.576a.955.955 0 0 0-.61.886v.443c0 .08-.066.145-.145.145h-.938a.145.145 0 0 1-.144-.145v-.42a2.172 2.172 0 0 1 1.398-2.056c.67-.256 1.104-.817 1.104-1.43 0-.87-.85-1.574-1.887-1.574-1.038 0-1.887.704-1.887 1.574v.149c0 .079-.065.144-.144.144H7.03a.145.145 0 0 1-.144-.144v-.149c0-.764.334-1.478.941-2.009A3.291 3.291 0 0 1 10 5.402Z"
        />
    </svg>
    </div>

    <div class="icon  bell-icon">
  <svg xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" 
       viewBox="0 0 20 20" 
       fill="none">
    <path
      fill="currentColor"
      fill-rule="evenodd"
      d="M10 3.125a1.042 1.042 0 0 0-1.04 1.03.628.628 0 0 1-.37.582 5.208 5.208 0 0 0-2.964 4.445v2.485c0 .025-.002.05-.005.075a3.958 3.958 0 0 1-.69 1.8h10.14a3.958 3.958 0 0 1-.69-1.8.628.628 0 0 1-.005-.075V9.182a5.208 5.208 0 0 0-2.976-4.45.625.625 0 0 1-.358-.565 1.042 1.042 0 0 0-1.041-1.042Zm-2.256.64a2.292 2.292 0 0 1 4.513 0 6.458 6.458 0 0 1 3.369 5.402v2.46a2.709 2.709 0 0 0 1.35 1.996.625.625 0 0 1-.309 1.169H3.334a.625.625 0 0 1-.308-1.17 2.708 2.708 0 0 0 1.35-1.995V9.137a6.458 6.458 0 0 1 3.368-5.372Z"
      clip-rule="evenodd"
    />
    <path
      fill="currentColor"
      fill-rule="evenodd"
      d="M7.5 13.542c.346 0 .626.28.626.625V15a1.875 1.875 0 1 0 3.75 0v-.833a.625.625 0 1 1 1.25 0V15a3.125 3.125 0 1 1-6.25 0v-.833c0-.345.28-.625.625-.625Z"
      clip-rule="evenodd"
    />
  </svg>
  <span class="badge"></span>
  </div>

    <div class="icon">
  <svg xmlns="http://www.w3.org/2000/svg" 
       width="20" height="20" 
       viewBox="0 0 20 20" 
       fill="none">
    <path
      fill="currentColor"
      fill-rule="evenodd"
      d="M10.789 3.745c-.201-.827-1.377-.827-1.577 0a2.06 2.06 0 0 1-3.076 1.274c-.727-.443-1.559.39-1.116 1.116a2.062 2.062 0 0 1-1.275 3.077c-.827.2-.827 1.376 0 1.577a2.062 2.062 0 0 1 1.274 3.075c-.443.727.39 1.559 1.116 1.116a2.062 2.062 0 0 1 3.077 1.275c.2.827 1.376.827 1.577 0a2.062 2.062 0 0 1 3.075-1.274c.727.443 1.559-.39 1.116-1.116a2.062 2.062 0 0 1 1.275-3.076c.827-.201.827-1.377 0-1.577a2.064 2.064 0 0 1-1.274-3.076c.443-.727-.39-1.559-1.116-1.116a2.062 2.062 0 0 1-3.076-1.275ZM7.997 3.45c.51-2.1 3.497-2.1 4.006 0a.812.812 0 0 0 1.212.502c1.845-1.124 3.958.988 2.834 2.834a.813.813 0 0 0 .5 1.21c2.101.51 2.101 3.498 0 4.007a.812.812 0 0 0-.501 1.212c1.124 1.845-.988 3.958-2.834 2.834a.813.813 0 0 0-1.21.5c-.51 2.101-3.498 2.101-4.007 0a.812.812 0 0 0-1.212-.501c-1.845 1.124-3.958-.988-2.834-2.834a.813.813 0 0 0-.5-1.21c-2.101-.51-2.101-3.498 0-4.007a.812.812 0 0 0 .501-1.212C2.828 4.94 4.94 2.827 6.786 3.951a.81.81 0 0 0 1.21-.501Z"
      clip-rule="evenodd"
    />
    <path
      fill="currentColor"
      fill-rule="evenodd"
      d="M10 8.125a1.875 1.875 0 1 0 0 3.75 1.875 1.875 0 0 0 0-3.75ZM6.875 10a3.125 3.125 0 1 1 6.25 0 3.125 3.125 0 0 1-6.25 0Z"
      clip-rule="evenodd"
    />
  </svg>
  </div>

        <button class="add-button">+</button>
    </div>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>
    </div>
    @stack('scripts')
</body>
</html>
