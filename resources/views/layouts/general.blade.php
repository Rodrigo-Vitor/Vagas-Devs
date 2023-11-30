<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - VagasDevs</title>
 @yield('styles')
</head>

<style>
  /* Estilos gerais */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  nav {
    background-color: #333;
    color: #fff;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
  }

  nav h1 {
    margin: 0;
    font-size: 24px;
  }

  nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
  }

  nav a:hover {
    text-decoration: underline;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    width: 200px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: #fff;
    padding: 12px 16px;
    display: block;
    text-decoration: none;
  }

  .dropdown-content a:hover {
    background-color: #555;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .signup {
    background-color: #4CAF50;
    padding: 10px 15px;
    border-radius: 5px;
  }

  /* Estilo para o menu de hambúrguer em dispositivos móveis */
  .hamburger-icon {
    font-size: 1.5em;
    cursor: pointer;
    display: none;
  }

  .mobile-menu {
    display: none;
    flex-direction: column;
    align-items: center;
    background-color: #333;
    position: absolute;
    top: 60px;
    right: 0px;
    width: 100vw;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .mobile-menu a {
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: center;
  }

  .mobile-menu a:hover {
    background-color: #555;
  }

  footer {
    min-height: 150px;
    background-color: #333
  }

  /* Media query para dispositivos com largura menor que 768px (tamanho típico de smartphones) */
  @media screen and (max-width: 768px) {
    .dropdown, .iam {
      display: none; /* Oculta o menu normal */
    }

    .hamburger-icon {
      display: block; /* Exibe o ícone de hambúrguer */
    }  
  }
</style>

<body>  
  <nav>
    <a href="{{url('/')}}" style="font-size: 2rem">VagasDevs</a>
    <div>  
      <a href="{{ route('company') }}" class="iam">Sou Empresa</a>
      <!-- Dropdown de Login -->
      <div class="dropdown">
        <a href="#">Login</a>
        <div class="dropdown-content">
          <a href="{{ route('login-company') }}">Como Empresa</a>
          <a href="{{ route('login-programmer') }}">Como Programador</a>
        </div>
      </div>
      <div class="dropdown">
        <a href="#" class="signup">Cadastra-se</a>
        <div class="dropdown-content">
          <a href="{{ route('register-company') }}">Como Empresa</a>
          <a href="{{ route('registro-programmer') }}">Como Programador</a>
        </div>
        </div>

        <!-- Ícone de hambúrguer -->
        <div class="hamburger-icon">&#9776;</div>

        <!-- Menu de hambúrguer para dispositivos móveis -->
        <div class="mobile-menu">
          <a href="#">Sou Empresa</a>
          <a href="#">Login Como Empresa</a>
          <a href="#">Login Como Programador</a>
          <a href="#">Cadastra-se como empresa</a>
          <a href="#">Cadastra-se como programador</a>
        </div>
      </div>
  </nav>

  @yield('content')

  <footer>

  </footer>
  <script>
    // JavaScript para alternar a visibilidade do menu de hambúrguer
    document.querySelector('.hamburger-icon').addEventListener('click', function() {
      const mobileMenu = document.querySelector('.mobile-menu');
      mobileMenu.style.display = mobileMenu.style.display === 'flex' ? 'none' : 'flex';
      mobileMenu.style.opacity
    });

    // Fechar o menu quando um item é clicado
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
    mobileMenuLinks.forEach(link => {
      link.addEventListener('click', () => {
        document.querySelector('.mobile-menu').style.display = 'none';
      });
    });
  </script>
</body>

</html>
