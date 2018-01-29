Rails.application.routes.draw do
  root to: "home#index"
  devise_for :users
  resources :users do
    resources :brands, :products
    resources :orders do
      resources :order_items
    end
    resources :customers do
      resources :orders do
        resources :order_items
      end
    end
  end
  resources :search
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
