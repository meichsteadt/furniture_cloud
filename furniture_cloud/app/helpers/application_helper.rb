module ApplicationHelper
  def active?(params, sort_by)
    return 'active' if params[:sort_by] == sort_by
    ''
  end

  def reversed?(params, sort_by)
    return 'reversed' if params[:sort_by] == sort_by && params[:sort_order] == "asc"
    ''
  end

  def reverse_sort_order(order)
    if order == "desc"
      return "asc"
    else
      return "desc"
    end
  end
end
