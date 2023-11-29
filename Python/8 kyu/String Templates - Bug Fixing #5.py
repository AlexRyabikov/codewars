
 """ 
Oh no! Timmy hasn't followed instructions very carefully and forgot how to use the new String Template feature, Help Timmy with his string template so it works as he expects!


<div>
<a href="http://www.codewars.com/kata/55c7f90ac8025ebee1000062" style="text-decoration: none; font-size: 20px; font-family: monospace;">◄PREVIOUS KATA</a>
<a href="http://www.codewars.com/kata/55c933c115a8c426ac000082" style="text-decoration: none; font-size: 20px; font-family: monospace;float:right;">NEXT KATA►</a>
</div>


 """ 

def build_string(*args):
    return "I like {0}!".format(", ".join(args))