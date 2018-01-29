class CreateProducts < ActiveRecord::Migration[5.0]
  def change
    create_table :products do |t|
      t.integer :user_id
      t.integer :brand_id
      t.string :name
      t.string :number
      t.float :price
      t.string :image

      t.timestamps
    end
  end
end
