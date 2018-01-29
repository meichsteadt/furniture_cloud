class AddTotalValueOrders < ActiveRecord::Migration[5.0]
  def change
    change_table :orders do |t|
      t.float :total, default: 0
    end
  end
end
