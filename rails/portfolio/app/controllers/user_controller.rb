class UserController < ActionController::Base
  def new
    code = params[:code]
    @user = User.new()
    access_token = @user.post(code)
    session[:access_token] = access_token
    flash[:notice] = "You are now logged in"
    redirect_to repos_path
  end
end
