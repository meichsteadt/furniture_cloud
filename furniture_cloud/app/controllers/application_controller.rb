class ApplicationController < ActionController::Base
  protect_from_forgery with: :exception
  before_action :authenticate_user!

  def search_customers(search)
    first_name = search.split(' ')[0]
    last_name = search.split(' ')[1]
    Customer.where("first_name LIKE ? AND last_name LIKE ?", first_name, last_name)
  end
end
