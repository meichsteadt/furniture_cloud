class BrandsController < ApplicationController
  before_action :set_brand, only: [:show, :edit, :update, :destroy]

  # GET /brands
  # GET /brands.json
  def index
    @brands = current_user.brands.order(:name)
    @start_date = Date.today.beginning_of_month.strftime("%d %b, %Y")
    @end_date = Date.today.end_of_year.strftime("%d %b, %Y")
    params[:start_date]? @start_date = params[:start_date] : @start_date
    params[:end_date]? @end_date = params[:end_date] : @end_date
    if params[:sort_by]
      @brands = @brands.order(params[:sort_by])
    end
    @page_number = 1
    if params[:page_number]
      @page_number = params[:page_number].to_i
    end
    @brands = @brands.page(@page_number)
  end

  # GET /brands/1
  # GET /brands/1.json
  def show
  end

  # GET /brands/new
  def new
    @brand = current_user.brands.new

    respond_to do |format|
      format.html
      format.js
    end
  end

  # GET /brands/1/edit
  def edit
  end

  # POST /brands
  # POST /brands.json
  def create
    @brand = current_user.brands.new(brand_params)

    respond_to do |format|
      if @brand.save
        format.html { redirect_to user_brand_path(current_user, @brand), notice: 'Brand was successfully created.' }
        format.json { render :show, status: :created, location: @brand }
        format.js
      else
        format.html { render :new }
        format.json { render json: @brand.errors, status: :unprocessable_entity }
        format.js
      end
    end
  end

  # PATCH/PUT /brands/1
  # PATCH/PUT /brands/1.json
  def update
    respond_to do |format|
      if @brand.update(brand_params)
        format.html { redirect_to user_brand_path(current_user, @brand), notice: 'Brand was successfully updated.' }
        format.json { render :show, status: :ok, location: @brand }
      else
        format.html { render :edit }
        format.json { render json: @brand.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /brands/1
  # DELETE /brands/1.json
  def destroy
    @brand.destroy
    respond_to do |format|
      format.html { redirect_to user_brands_path(current_user), notice: 'Brand was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_brand
      @brand = Brand.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def brand_params
      params.require(:brand).permit(:user_id, :logo, :name)
    end
end
