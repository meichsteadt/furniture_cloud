class Brand < ApplicationRecord
  has_many :products
  belongs_to :user

  def sales(start_date, end_date)
    self.products.collect {|e| e.sales(start_date, end_date)}.sum
  end
end
