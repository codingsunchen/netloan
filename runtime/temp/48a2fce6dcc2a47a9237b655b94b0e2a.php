<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wamp\www\myproject\public/../application/index\view\index\work.html";i:1559205128;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>表单input</title>
    </head>
    <body>
        <h1 align="center">注册信息</h1>
        <div align="center"><span align="center" style="color:red">*</span>为必填项
        </div>
        <hr color="#336699" />
        <form>
            <table width="600px" bgcolor="#f2f2f2" align="center">
                <tr>
                    <td align="left">Title(Mr,Ms,Dr etc):</td>
                    <td>
                        <select>
                            <option>**Please Select**</option>
                            <option value="mr">Mr</option>
                            <option value="ms">Ms</option>
                            <option value="dr etc">Dr etc</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td align="left"><span style="color:red">*</span>First name</td>
                    <td>
                        <INPUT type="text" name="firstname" required>
                        <span>请输入真实姓名</span>
                    </td>
                </tr>

                <tr>
                    <td align="left"><span style="color:red">*</span>Last name</td>
                    <td>
                        <INPUT type="text" name="lastname" required>
                        <span>请输入真实姓名</span>
                    </td>
                </tr>

                <tr>
                    <td align="left">Sex:</td>
                    <td>
                        boy<INPUT type="radio" name="Sex" value="man" checked/>
                        girl<INPUT type="radio" name="Sex" value="woman"/>
                    </td>
                </tr>

                <tr>
                    <td align="left">Job title:</td>
                    <td>
                        <INPUT type="text" name="jobtitle">
                    </td>
                </tr>

                <tr>
                    <td align="left">Institution/Organisation:</td>
                    <td>
                        <INPUT type="text" name="institution">
                    </td>
                </tr>

                <tr>
                    <td align="left"><span style="color:red">*</span>Number and Street:</td>
                    <td>
                        <INPUT type="text" name="Numberandstreet" required>
                    </td>
                </tr>

                <tr>
                    <td align="left"><span style="color:red">*</span>City:</td>
                    <td>
                        <INPUT type="text" name="City" required>
                    </td>
                </tr>

                <tr>
                    <td align="left">Country:</td>
                    <td>
                        <select>
                            <option>**Please Select**</option>
                            <option value="a1">中国</option>
                            <option value="a2">美国</option>
                            <option value="a3">英国</option>
                            <option value="a4">韩国</option>
                            <option value="a5">日本</option>
                            <option value="a6">朝鲜</option>
                            <option value="a7">法国</option>
                            <option value="a8">俄国</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td align="left"><span style="color:red">*</span>Zip Code/Postal Code:</td>
                    <td>
                        <INPUT type="text" name="zipcode" maxlength="6" required>
                        <span>最多输入6位数</span>
                    </td>
                    
                </tr>

                <tr>
                    <td align="left">Work phone:</td>
                    <td>
                        <INPUT type="text" name="workphone" maxlength="11">
                        <span>最多输入11位数</span>
                    </td>
                </tr>

                <tr>
                    <td align="left">Home phone:</td>
                    <td>
                        <INPUT type="text" name="homephone" maxlength="11">
                        <span>最多输入11位数</span>
                    </td>
                </tr>

                <tr>
                    <td align="left">Fax:</td>
                    <td>
                        <INPUT type="text" name="fax" maxlength="12">
                        <span>最多输入12位数</span>
                    </td>
                </tr>

                <tr>
                    <td align="left"><span style="color:red">*</span>E-mail:</td>
                    <td>
                        <INPUT type="email" name="email" value="@163.com" required>
                        <span>此邮箱用来确认你的身份</span>
                    </td>
                </tr>

                <tr>
                    <td align="left">How did you find <br> out about this Web site:</td>
                    <td>
                        <select>
                            <option>Please Select</option>
                            <option value="b1">朋友介绍</option>
                            <option value="b2">自己发现</option>
                            <option value="b3">广告看到</option>
                            <option value="b4">老师推荐</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td align="left">describes:</td>
                    <td>
                        <textarea rows="10" cols="30" placeholder="describes......"></textarea>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <span style="color:red">点击“创建用户”按钮，即表示您同意服务条款和隐私政策</span><br>
                        <INPUT type="submit" value="创建用户" style="width:100px;height:50px;">
                    </td>
                </tr>

            </table>
        </form>
    </body>
</html>