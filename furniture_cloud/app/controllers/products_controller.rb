class ProductsController < ApplicationController
  before_action :set_product, only: [:show, :edit, :update, :destroy]

  # GET /products
  # GET /products.json
  def index
    @products = current_user.products.all
    @start_date = Date.today.beginning_of_month.strftime("%d %b, %Y")
    @end_date = Date.today.end_of_month.strftime("%d %b, %Y")
    params[:start_date]? @start_date = params[:start_date] : @start_date
    params[:end_date]? @end_date = params[:end_date] : @end_date
    @page_number = 1
    if params[:sort_by]
      @products = @products.order(params[:sort_by])
    end
    if params[:sort_order] == "desc"
      @products.reverse!
    end
    if params[:page_number]
      @page_number = params[:page_number]
    end
    @products = @products.page(@page_number)
  end

  # GET /products/1
  # GET /products/1.json
  def show
    respond_to do |format|
      format.js
      format.html
    end
  end

  # GET /products/new
  def new
    @product = current_user.products.new
  end

  # GET /products/1/edit
  def edit
  end

  # POST /products
  # POST /products.json
  def create
    @product = current_user.products.new(product_params)

    respond_to do |format|
      if @product.save
        format.html { redirect_to user_product_path(current_user, @product), notice: 'Product was successfully created.' }
        format.json { render :show, status: :created, location: @product }
      else
        format.html { render :new }
        format.json { render json: @product.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /products/1
  # PATCH/PUT /products/1.json
  def update
    respond_to do |format|
      if @product.update(product_params)
        format.html { redirect_to user_product_path(current_user, @product), notice: 'Product was successfully updated.' }
        format.json { render :show, status: :ok, location: @product }
      else
        format.html { render :edit }
        format.json { render json: @product.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /products/1
  # DELETE /products/1.json
  def destroy
    @product.destroy
    respond_to do |format|
      format.html { redirect_to products_url, notice: 'Product was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_product
      @product = Product.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def product_params
      params.require(:product).permit(:name, :number, :image, :brand_id, :user_id, :price)
    end
end
