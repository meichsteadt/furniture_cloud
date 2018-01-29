class SearchController < ApplicationController
  def create
    @search = search_customers(params[:search])
    respond_to do |format|
      format.js
      format.html
    end
  end

private
  def search_params
    params.permit(:search)
  end
end
