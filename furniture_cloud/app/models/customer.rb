class Customer < ApplicationRecord
  has_many :orders
  belongs_to :user

  def self.sort_self(sort_by, sort_order = "asc")
    @customers = []
    if sort_by == "lifetime_value"
      @customers = Customer.all.sort_by {|e| e.lifetime_value}
    elsif sort_by == "last_name"
      @customers = Customer.order(:last_name)
      if sort_order == "desc"
        return Customer.order(:last_name => :desc)
      end
    else
      @customers = Customer.all.sort_by {|e| e.last_purchase}
    end
    if sort_order == "desc"
      @customers.reverse!
    end
    @customers
  end

  def lifetime_value
    self.orders.collect {|e| e.total}.sum
  end

  def last_purchase
    if self.orders.any?
      return self.orders.order(:created_at => :asc).first.created_at
    end
    nil
  end

  def full_address
    self.street + ", " + self.city + ", " + self.state
  end

  def full_name
    self.first_name + " " + self.last_name
  end
end
