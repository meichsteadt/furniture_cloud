class CreateBrands < ActiveRecord::Migration[5.0]
  def change
    create_table :brands do |t|
      t.integer :user_id
      t.string :name
      t.string :logo

      t.timestamps
    end
  end
end
