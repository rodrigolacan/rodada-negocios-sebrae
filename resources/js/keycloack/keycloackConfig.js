// keycloakConfig.js

// Configuração e inicialização do Keycloak
const keycloak = new Keycloak({
    url: 'https://amei.homolog.kubernetes.sebrae.com.br/auth',
    realm: 'externo',
    clientId: 'app-frontend',
  });
  
  window.keycloak = keycloak;

  export function initKeycloak() {
    return keycloak.init({
      enableLogging: true,
      onLoad: 'check-sso',
      silentCheckSsoRedirectUri: window.location.origin + '/silent-check-sso.html',
    });
  }
  export {keycloak}
  