// baseAccountProfile.js
import { keycloak } from './keycloackConfig';

export function initializeBaseAccountProfile() {
  document.addEventListener('DOMContentLoaded', () => {
    const BaSeAccountProfile = document.querySelector('#BaSeAccountProfile');
    if (BaSeAccountProfile) {
      BaSeAccountProfile.keycloak = keycloak;
    } else {
      console.warn('Elemento BaSeAccountProfile não encontrado');
    }
  });
}