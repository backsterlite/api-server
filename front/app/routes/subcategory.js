import Route from '@ember/routing/route';
import ENV from 'frontend/config/environment';

export default class CategoryRoute extends Route {
  async model(params) {
    let response = await fetch(`${ENV.apiBaseUrl}/api/${params.category_id}/${params.subcategory_id}.json`);
    return await response.json();
  }
}
