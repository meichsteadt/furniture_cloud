class OrdersController < ApplicationController
  before_action :set_order, only: [:show, :edit, :update, :destroy]
  def index
    @orders = current_user.orders
  end

  def show
  end

  def new
    if params[:customer_id]
      @customer = current_user.customers.find(params[:customer_id])
      @order = @customer.orders.new()
    else
      @order = Order.new()
    end
    if params[:customer_id]
      @order.customer_id = params[:customer_id]
    end
  end

  def create
    @order = Order.new(order_params)
    @customer = params[:customer]
    respond_to do |format|
    if @order.save
        format.html { redirect_to (edit_user_order_path(current_user, @order)), notice: 'Order was successfully created.' }
        format.json { render :show, status: :created, location: @customer }
      else
        format.html { render :new }
        format.json { render json: @customer.errors, status: :unprocessable_entity }
      end
    end
  end

  def edit

  end

  def update
    @order.update(order_params)
    respond_to do |format|
      format.html
      format.js
    end
  end

  def destroy

  end

private
  def set_order
    @order = Order.find(params[:id])
  end

  def order_params
    params.permit(:customer_id, :status, :user_id)
  end
end
