// utils.js
import { keycloak } from './keycloackConfig';

export function loginAmei() {
  if (keycloak.authenticated) {
    window.location.assign('/auth/amei/token/' + keycloak.token);
    return;
  }
  keycloak.login();
}

export function handler() {
  console.log('🔏 isAuthenticated', keycloak.authenticated ?? false);
  console.log('🔏 token', keycloak.token ?? '');
  console.log('🔏 tokenInfo', keycloak.tokenParsed ?? {});
}
