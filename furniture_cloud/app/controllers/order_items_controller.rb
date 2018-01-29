class OrderItemsController < ApplicationController
  before_action :set_order_item, only: [:show, :update, :edit, :destroy]
  def index

  end

  def show

  end

  def new
    @order = Order.find(params[:order_id])
    @order_item = @order.order_items.new()
  end

  def create
    @order = Order.find(params[:order_id])
    @order_item = @order.order_items.new(order_item_params)
    if @order.save!
      @order.update(total: (@order.total + (@order_item.quantity * @order_item.product.price)))
      respond_to do |format|
        format.html { redirect_to edit_user_customer_order_path(current_user, @order.customer, @order), notice: 'Order was successfully updated.'}
        format.js
      end
    end
  end

private
  def set_order_item
    @order_item = OrderItem.find(params[:id])
    @order = Order.find(params[:order_id])
  end

  def order_item_params
    params.require(:order_item).permit(:quantity, :product_id)
  end
end
