class Product < ApplicationRecord
  belongs_to :brand
  has_many :order_items
  has_many :orders, through: :order_items
  def sales(start_date, end_date)
    self.order_items.where("created_at >= ? AND created_at <= ?", start_date, end_date).collect {|e| e.quantity * self.price}.sum
  end
end
