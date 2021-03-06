class CreateCustomers < ActiveRecord::Migration[5.0]
  def change
    create_table :customers do |t|
      t.string :first_name
      t.string :last_name
      t.string :email
      t.string :street
      t.string :city
      t.string :state
      t.integer :zip
      t.integer :user_id
      t.string :gender
      t.integer :age
      
      t.timestamps
    end
  end
end
