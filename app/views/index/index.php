<use layout="index" />

<block name="index">
 
    <code>
public function __construct()
    {
        $this->alert();
        $this->data();
        $this->error();
        $this->data['lang'] = config::globals('lang');
        $this->data['title'] = lang('global', 'title');       
    }
    </code>

    <h1>Classic editor</h1>
    <div>
        <p>This is some sample content.</p>
        <textarea id="editable"></textarea>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea#editable',
            language: 'ru',
            plugins: 'code, codesample',
        });
    </script>


    <!-- //////////////////////////////////// -->
    <style>
        h3 {
            line-height: 30px;
            text-align: center;
        }

        #drop_file_area {
            height: 200px;
            border: 2px dashed #ccc;
            line-height: 200px;
            text-align: center;
            font-size: 20px;
            background: #f9f9f9;
            margin-bottom: 15px;
        }

        .drag_over {
            color: #000;
            border-color: #000;
        }

        .thumbnail {
            width: 100px;
            height: 100px;
            padding: 2px;
            margin: 2px;
            border: 2px solid lightgray;
            border-radius: 3px;
            float: left;
        }

        #upload_file {
            display: none;
        }
    </style>

    <form method="post" action="/upload">
        <div class="container">
            <inp id="drop_file_area">
                Drag and Drop Files Here
        </div>
        <!-- <div id="uploaded_file"></div> -->
        </div>
        <input type="file">
    </form>



</block>