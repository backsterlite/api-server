import EmberRouter from '@ember/routing/router';
import config from './config/environment';

export default class Router extends EmberRouter {
  location = config.locationType;
  rootURL = config.rootURL;
}

Router.map(function() {
  this.route('category', {path: '/:category_id'});
  this.route('subcategory', {path: '/:category_id/:subcategory_id'})
  this.route('post', {path: '/:category_id/:subcategory_id/:post_id'})
});
