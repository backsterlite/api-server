import Route from '@ember/routing/route';
import ENV from 'frontend/config/environment';

export default class IndexRoute extends Route {
  async model(){
    let response = await fetch(`${ENV.apiBaseUrl}/api/index.json`);
    return await response.json();
  }
}
