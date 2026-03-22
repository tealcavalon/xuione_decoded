<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?108                 ?0                  	;0	>>108
1    6     GOTO/253                  ?0        ?3                   ?1                  	;0
2    8     ECHO/40                   ?0        2:'                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    The playlist you selected has more than 500 results, the review page will not show all results.
                </div>
                ' ?0                  	;0
3    10    GOTO/253                  ?0        ?370                 ?3                  	;0
4    12    ISSET_ISEMPTY_CV/197      #45=      16?0                 ?0                  	;33554432
5    12    JMPZ/43                   ?0        #45                  ?7                  	;0	>>7
6    13    GOTO/253                  ?0        ?366                 ?4                  	;0
7    15    ECHO/40                   ?0        5:'                        <input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                        <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />
                        <input type="hidden" name="type" value=\'' ?0                  	;0	<<5
8    16    ECHO/40                   ?0        16?1                 ?0                  	;0
9    17    ECHO/40                   ?0        6:'\' />
                        <div id="basicwizard">
                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                <li class="nav-item">
                                    <a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-folder-alert-outline mr-1"></i>
                                        <span class="d-none d-sm-inline">Options</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-server-network mr-1"></i>
                                        <span class="d-none d-sm-inline">Servers</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content b-0 mb-0 pt-0">
                                <div class="tab-pane" id="advanced-options">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="duplicates">Show Potential Duplicates <i title="This option will remove all potential duplicate results from the review page, if you do not select this, duplicates will be unchecked by default so you are able to check them to include them anyway." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="duplicates" id="duplicates" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file" id="m3u_file" name="m3u_file" style="padding-top: 5px;" accept=".m3u, .m3u8">
                                                </div>
                                            </div>
                                            ' ?0                  	;0
10   18    IS_EQUAL/17               #46=      16?1                 7:1                 	;0
11   18    JMPZ/43                   ?0        #46                  ?13                 	;0	>>13
12   19    GOTO/253                  ?0        ?794                 ?8                  	;0
13   21    GOTO/253                  ?0        ?408                 ?9                  	;0	<<11
14   23    FE_RESET_R/77             $47=      16?2                 ?24                 	;0
15   23    FE_FETCH_R/78             ?0        $47                  16?3                	;24	>>24	<<23
16   24    ECHO/40                   ?0        10:'                                                        <option value="' ?0                  	;0
17   25    FETCH_DIM_R/81            $48=      16?3                 11:'profile_id'     	;0
18   25    ECHO/40                   ?0        $48                  ?0                  	;0
19   26    ECHO/40                   ?0        12:'">'              ?0                  	;0
20   27    FETCH_DIM_R/81            $49=      16?3                 13:'profile_name'   	;0
21   27    ECHO/40                   ?0        $49                  ?0                  	;0
22   28    ECHO/40                   ?0        14:'</option>
                                                        ' ?0                  	;0
23   29    JMP/42                    ?0        ?15                  ?0                  	;0	>>15
24   29    FE_FREE/127               ?0        $47                  ?0                  	;0	<<14
25   32    ECHO/40                   ?0        15:'                                                    </select>
                                                </div>
                                                <label class="col-md-4 col-form-label" for="delay_minutes">Minute Delay <i title="Delay stream by X minutes. Will not work with on demand streams." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="delay_minutes" name="delay_minutes" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="user_agent">User Agent</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="user_agent" name="user_agent" value="' ?0                  	;0
26   33    INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'htmlspecialchars'	;1
27   33    FETCH_DIM_FUNC_ARG/93     $50=      16?4                 18:'user_agent'     	;1
28   33    FETCH_DIM_FUNC_ARG/93     $51=      $50                  19:'argument_default_value'	;1
29   33    SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
30   33    DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
31   33    ECHO/40                   ?0        $52                  ?0                  	;0
32   34    ECHO/40                   ?0        20:'">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="http_proxy" name="http_proxy" value="' ?0                  	;0
33   35    GOTO/253                  ?0        ?714                 ?21                 	;0
34   37    INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'intval'         	;1
35   37    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
36   37    DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
37   37    ECHO/40                   ?0        $53                  ?0                  	;0
38   38    ECHO/40                   ?0        24:'" method="POST" id="stream_form" data-parsley-validate="">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    ' ?0                  	;0
39   39    ISSET_ISEMPTY_CV/197      #54=      16?0                 ?0                  	;33554432
40   39    BOOL_NOT/13               #55=      #54                  ?0                  	;0
41   39    JMPZ/43                   ?0        #55                  ?43                 	;0	>>43
42   40    GOTO/253                  ?0        ?44                  ?25                 	;0
43   42    ECHO/40                   ?0        26:'                    <div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li>
								<input name="submit_stream" type="submit" class="btn btn-primary" value="Import Selected" />
							</li>
						</ol>
					</div>
                    ' ?0                  	;0	<<41
44   44    GOTO/253                  ?0        ?308                 ?27                 	;0
45   46    ECHO/40                   ?0        28:'                                                    </select>
                                                </div>
                                            </div>
                                            ' ?0                  	;0
46   48    ECHO/40                   ?0        29:'                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="restart_on_edit">' ?0                  	;0
47   49    IS_EQUAL/17               #56=      16?1                 30:1                	;0
48   49    JMPZ/43                   ?0        #56                  ?50                 	;0	>>50
49   50    GOTO/253                  ?0        ?398                 ?31                 	;0
50   52    ECHO/40                   ?0        32:'Auto-Encode Movies' ?0                  	;0	<<48
51   53    GOTO/253                  ?0        ?397                 ?33                 	;0
52   55    GOTO/253                  ?0        ?54                  ?34                 	;0
53   57    ECHO/40                   ?0        35:'                        <div class="form-group row">
                            <div class="col-md-12">
                                <h4 class="header-title">Stream Import</h4>
                                <p class="sub-header" style="margin-bottom: 0;">
                                    To import a stream, ensure the checkbox next to it is selected. You will need to go to each page for that page of streams to be included in the import.
                                </p>
                            </div>
                        </div>
                        ' ?0                  	;0
54   59    ECHO/40                   ?0        36:'                    </div>
                </div>
            </div>
        </div>
        ' ?0                  	;0
55   60    GOTO/253                  ?0        ?822                 ?37                 	;0
56   62    FETCH_STATIC_PROP_IS/176  $57=      38:'rRequest'        39:'XUI'            	;0
57   62    ISSET_ISEMPTY_DIM_OBJ/115 #58=      $57                  41:'type'           	;33554432
58   62    JMPZ/43                   ?0        #58                  ?60                 	;0	>>60
59   63    GOTO/253                  ?0        ?803                 ?42                 	;0
60   65    FETCH_STATIC_PROP_IS/176  $59=      43:'rRequest'        44:'XUI'            	;0	<<58
61   65    ISSET_ISEMPTY_DIM_OBJ/115 #60=      $59                  46:'type'           	;33554432
62   65    JMPZ/43                   ?0        #60                  ?64                 	;0	>>64
63   66    GOTO/253                  ?0        ?66                  ?47                 	;0
64   68    ASSIGN/38                 ?16       16?1                 48:1                	;0	<<62
65   69    GOTO/253                  ?0        ?802                 ?49                 	;0
66   71    GOTO/253                  ?0        ?796                 ?50                 	;0
67   75    ISSET_ISEMPTY_CV/197      #62=      16?0                 ?0                  	;33554432
68   75    BOOL_NOT/13               #63=      #62                  ?0                  	;0
69   75    JMPNZ_EX/47               #63=      #63                  ?72                 	;0	>>72
70   75    BOOL_NOT/13               #64=      16?0                 ?0                  	;0
71   75    BOOL/52                   #63=      #64                  ?0                  	;0
72   75    BOOL_NOT/13               #65=      #63                  ?0                  	;0	<<69
73   75    JMPZ/43                   ?0        #65                  ?75                 	;0	>>75
74   76    GOTO/253                  ?0        ?819                 ?51                 	;0
75   78    ASSIGN/38                 ?21       16?5                 52:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Live Stream</strong>',
    'icon' => 'mdi mdi-play',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
  1 => 
  array (
    'id' => 'offline',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-secondary waves-effect waves-light btn-xs\'>Offline</strong>',
    'icon' => 'mdi mdi-stop',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
)	;0	<<73
76   79    FE_RESET_R/77             $67=      16?6                 ?88                 	;0
77   79    FE_FETCH_R/78             ?0        $67                  16?7                	;88	>>88	<<87
78   80    FETCH_DIM_R/81            $69=      16?7                 53:'id'             	;0
79   80    INIT_ARRAY/71             #70=      $69                  54:'id'             	;22
80   80    ADD_ARRAY_ELEMENT/72      #70=      55:'offline'         56:'parent'         	;0
81   80    FETCH_DIM_R/81            $71=      16?7                 57:'server_name'    	;0
82   80    ADD_ARRAY_ELEMENT/72      #70=      $71                  58:'text'           	;0
83   80    ADD_ARRAY_ELEMENT/72      #70=      59:'mdi mdi-server-network' 60:'icon'           	;0
84   80    ADD_ARRAY_ELEMENT/72      #70=      61:array (
  'opened' => true,
) 62:'state'          	;0
85   80    ASSIGN_DIM/147            ?23       16?5                 ?4386466            	;0
86   80    OP_DATA/137               ?0        #70                  ?0                  	;0
87   81    JMP/42                    ?0        ?77                  ?0                  	;0	>>77
88   81    FE_FREE/127               ?0        $67                  ?0                  	;0	<<76
89   83    GOTO/253                  ?0        ?813                 ?63                 	;0
90   85    IS_EQUAL/17               #72=      16?1                 64:1                	;0
91   85    JMPZ/43                   ?0        #72                  ?93                 	;0	>>93
92   86    GOTO/253                  ?0        ?95                  ?65                 	;0
93   88    ECHO/40                   ?0        66:'                                            <th>TMDb Results</th>
                                            ' ?0                  	;0	<<91
94   89    GOTO/253                  ?0        ?416                 ?67                 	;0
95   91    ECHO/40                   ?0        68:'                                            <th>EPG Search</th>
                                            <th class="text-center">Language</th>
                                            ' ?0                  	;0
96   92    GOTO/253                  ?0        ?416                 ?69                 	;0
97   94    ECHO/40                   ?0        70:'                        <div class="row">
                            <div class="col-12">
                                <table id="datatable" class="table table-striped table-borderless dt-responsive nowrap" data-count="' ?0                  	;0
98   95    INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'count'          	;1
99   95    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
100  95    DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
101  95    ECHO/40                   ?0        $73                  ?0                  	;0
102  96    ECHO/40                   ?0        73:'">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Add</th>
                                            ' ?0                  	;0
103  97    IS_EQUAL/17               #74=      16?1                 74:1                	;0
104  97    JMPZ/43                   ?0        #74                  ?106                	;0	>>106
105  98    GOTO/253                  ?0        ?1264                ?75                 	;0
106  100   ECHO/40                   ?0        76:'                                            <th class="text-center">Image</th>
                                            <th>Movie Name</th>
                                            ' ?0                  	;0	<<104
107  101   GOTO/253                  ?0        ?1263                ?77                 	;0
108  103   INCLUDE_OR_EVAL/73        ?30       78:'session.php'     ?0                  	;2	<<0
109  104   INCLUDE_OR_EVAL/73        ?31       79:'functions.php'   ?0                  	;2
110  105   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'e6d500e19634d513'	;0
111  105   DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
112  105   JMPZ/43                   ?0        $77                  ?114                	;0	>>114
113  106   GOTO/253                  ?0        ?116                 ?82                 	;0
114  108   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'e72F42a93714BA87'	;0	<<112
115  108   DO_FCALL_BY_NAME/131      ?33       ?0                   ?0                  	;0
116  110   GOTO/253                  ?0        ?56                  ?85                 	;0
117  112   ECHO/40                   ?0        86:'                </div>
                ' ?0                  	;0
118  114   GOTO/253                  ?0        ?1                   ?87                 	;0
119  116   ECHO/40                   ?0        88:'                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    No results were found in the playlist.
                </div>
                ' ?0                  	;0
120  117   GOTO/253                  ?0        ?1                   ?89                 	;0
121  119   ASSIGN/38                 ?34       16?0                 90:NULL             	;0
122  121   GOTO/253                  ?0        ?1077                ?91                 	;0
123  123   FETCH_CONSTANT/99         #80=      ?0                   92:'STATUS_INVALID_FILE'	;16
124  123   ASSIGN/38                 ?36       16?8                 #80                 	;0
125  124   GOTO/253                  ?0        ?1077                ?95                 	;0
126  126   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'b4018DE13163b303'	;1
127  126   FETCH_FUNC_ARG/92         $82=      98:'_FILES'          ?0                  	;1
128  126   FETCH_DIM_FUNC_ARG/93     $83=      $82                  99:'m3u_file'       	;1
129  126   FETCH_DIM_FUNC_ARG/93     $84=      $83                  100:'tmp_name'      	;1
130  126   SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
131  126   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
132  126   ASSIGN/38                 ?41       16?9                 $85                 	;0
133  127   FE_RESET_R/77             $87=      16?9                 ?271                	;0
134  127   FE_FETCH_R/78             ?0        $87                  16?10               	;271	>>271	<<270
135  128   NOP/0                     ?0        ?0                   ?0                  	;1
136  128   GOTO/253                  ?0        ?137                 ?101                	;0
137  130   INIT_METHOD_CALL/112      ?0        16?10                102:'getExtTags'    	;0
138  130   DO_FCALL/60               $88=      ?0                   ?0                  	;0
139  130   FETCH_DIM_R/81            $89=      $88                  104:0               	;0
140  130   ASSIGN/38                 ?45       16?11                $89                 	;0
141  131   BOOL_NOT/13               #91=      16?11                ?0                  	;0
142  131   JMPZ/43                   ?0        #91                  ?145                	;0	>>145
143  132   NOP/0                     ?0        ?0                   ?0                  	;1
144  132   GOTO/253                  ?0        ?182                 ?105                	;0
145  134   INIT_METHOD_CALL/112      ?0        16?10                106:'getPath'       	;0	<<142
146  134   DO_FCALL/60               $92=      ?0                   ?0                  	;0
147  134   ASSIGN/38                 ?48       16?12                $92                 	;0
148  135   IS_EQUAL/17               #94=      16?1                 108:1               	;0
149  135   JMPZ/43                   ?0        #94                  ?152                	;0	>>152
150  136   NOP/0                     ?0        ?0                   ?0                  	;1
151  136   GOTO/253                  ?0        ?157                 ?109                	;0
152  138   ASSIGN/38                 ?50       16?13                110:array (
  0 => 'mp4',
  1 => 'mkv',
  2 => 'mov',
  3 => 'avi',
  4 => 'mpg',
  5 => 'mpeg',
  6 => 'flv',
  7 => 'wmv',
  8 => 'm4v',
)	;0	<<149
153  139   NOP/0                     ?0        ?0                   ?0                  	;1
154  139   GOTO/253                  ?0        ?155                 ?111                	;0
155  141   NOP/0                     ?0        ?0                   ?0                  	;1
156  141   GOTO/253                  ?0        ?158                 ?112                	;0
157  143   ASSIGN/38                 ?51       16?13                113:array (
  0 => 'ts',
  1 => 'm3u8',
  2 => 'm3u',
  3 => 'mpd',
  4 => 'ism',
  5 => '',
)	;0
158  145   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'in_array'      	;2
159  145   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'strtolower'    	;1
160  145   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'pathinfo'      	;1
161  145   INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'explode'       	;2
162  145   SEND_VAL_EX/116           ?80       122:'?'              ?1                  	;0
163  145   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
164  145   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
165  145   SEPARATE/156              $97=      $97                  ?0                  	;0
166  145   FETCH_DIM_FUNC_ARG/93     $98=      $97                  123:0               	;1
167  145   SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
168  145   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
169  145   SEPARATE/156              $99=      $99                  ?0                  	;0
170  145   FETCH_DIM_FUNC_ARG/93     $100=     $99                  124:'extension'     	;1
171  145   SEND_VAR_EX/66            ?80       $100                 ?1                  	;0
172  145   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
173  145   SEND_VAR_NO_REF_EX/50     ?80       $101                 ?1                  	;0
174  145   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
175  145   DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
176  145   BOOL_NOT/13               #103=     $102                 ?0                  	;0
177  145   JMPZ/43                   ?0        #103                 ?180                	;0	>>180
178  146   NOP/0                     ?0        ?0                   ?0                  	;1
179  146   GOTO/253                  ?0        ?182                 ?125                	;0
180  148   NOP/0                     ?0        ?0                   ?0                  	;1	<<177
181  148   GOTO/253                  ?0        ?209                 ?126                	;0
182  153   NOP/0                     ?0        ?0                   ?0                  	;1
183  153   GOTO/253                  ?0        ?270                 ?127                	;0
184  155   NOP/0                     ?0        ?0                   ?0                  	;1
185  155   GOTO/253                  ?0        ?268                 ?128                	;0
186  157   IS_EQUAL/17               #104=     16?1                 129:1               	;0
187  157   JMPZ/43                   ?0        #104                 ?190                	;0	>>190
188  158   NOP/0                     ?0        ?0                   ?0                  	;1
189  158   GOTO/253                  ?0        ?241                 ?130                	;0
190  160   INIT_ARRAY/71             #106=     16?12                131:'url'           	;18	<<187
191  160   INIT_METHOD_CALL/112      ?0        16?11                132:'getTitle'      	;0
192  160   DO_FCALL/60               $107=     ?0                   ?0                  	;0
193  160   JMP_SET/152               #108=     $107                 ?195                	;0
194  160   QM_ASSIGN/22              #108=     134:''               ?0                  	;0
195  160   ADD_ARRAY_ELEMENT/72      #106=     #108                 135:'title'         	;0
196  160   INIT_METHOD_CALL/112      ?0        16?11                136:'getAttribute'  	;1
197  160   SEND_VAL_EX/116           ?80       138:'group-title'    ?1                  	;0
198  160   DO_FCALL/60               $109=     ?0                   ?0                  	;0
199  160   JMP_SET/152               #110=     $109                 ?201                	;0
200  160   QM_ASSIGN/22              #110=     139:''               ?0                  	;0
201  160   ADD_ARRAY_ELEMENT/72      #106=     #110                 140:'category'      	;0
202  160   ADD_ARRAY_ELEMENT/72      #106=     16?14                141:'exists'        	;0
203  160   ASSIGN_DIM/147            ?60       16?0                 ?4397406            	;0
204  160   OP_DATA/137               ?0        #106                 ?0                  	;0
205  161   NOP/0                     ?0        ?0                   ?0                  	;1
206  161   GOTO/253                  ?0        ?268                 ?142                	;0
207  162   NOP/0                     ?0        ?0                   ?0                  	;1
208  162   GOTO/253                  ?0        ?241                 ?143                	;0
209  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'in_array'      	;2
210  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'str_replace'   	;3
211  164   SEND_VAL_EX/116           ?80       148:'https://'       ?1                  	;0
212  164   SEND_VAL_EX/116           ?96       149:'http://'        ?2                  	;0
213  164   SEND_VAR_EX/66            ?112      16?12                ?3                  	;0
214  164   DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
215  164   SEND_VAR_NO_REF_EX/50     ?80       $111                 ?1                  	;0
216  164   SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
217  164   DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
218  164   ASSIGN/38                 ?68       16?14                $112                	;0
219  165   BOOL_NOT/13               #114=     16?14                ?0                  	;0
220  165   JMPNZ_EX/47               #114=     #114                 ?224                	;0	>>224
221  165   FETCH_STATIC_PROP_R/173   $115=     150:'rRequest'       151:'XUI'           	;0
222  165   FETCH_DIM_R/81            $116=     $115                 153:'duplicates'    	;0
223  165   BOOL/52                   #114=     $116                 ?0                  	;0
224  165   BOOL_NOT/13               #117=     #114                 ?0                  	;0	<<220
225  165   JMPZ/43                   ?0        #117                 ?228                	;0	>>228
226  166   NOP/0                     ?0        ?0                   ?0                  	;1
227  166   GOTO/253                  ?0        ?268                 ?154                	;0
228  168   INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'count'         	;1	<<225
229  168   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
230  168   DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
231  168   IS_SMALLER/19             #119=     $118                 157:500             	;0
232  168   JMPZ/43                   ?0        #119                 ?235                	;0	>>235
233  169   NOP/0                     ?0        ?0                   ?0                  	;1
234  169   GOTO/253                  ?0        ?186                 ?158                	;0
235  171   FETCH_CONSTANT/99         #120=     ?0                   159:'STATUS_TOO_MANY_RESULTS'	;16	<<232
236  171   ASSIGN/38                 ?76       16?8                 #120                	;0
237  172   FE_FREE/127               ?0        $87                  ?3                  	;1
238  172   GOTO/253                  ?0        ?272                 ?162                	;0
239  173   NOP/0                     ?0        ?0                   ?0                  	;1
240  173   GOTO/253                  ?0        ?184                 ?163                	;0
241  176   INIT_ARRAY/71             #123=     16?12                164:'url'           	;26
242  176   INIT_METHOD_CALL/112      ?0        16?11                165:'getAttribute'  	;1
243  176   SEND_VAL_EX/116           ?80       167:'tvg-logo'       ?1                  	;0
244  176   DO_FCALL/60               $124=     ?0                   ?0                  	;0
245  176   JMP_SET/152               #125=     $124                 ?247                	;0
246  176   QM_ASSIGN/22              #125=     168:''               ?0                  	;0
247  176   ADD_ARRAY_ELEMENT/72      #123=     #125                 169:'logo'          	;0
248  176   INIT_METHOD_CALL/112      ?0        16?11                170:'getAttribute'  	;1
249  176   SEND_VAL_EX/116           ?80       172:'tvg-id'         ?1                  	;0
250  176   DO_FCALL/60               $126=     ?0                   ?0                  	;0
251  176   JMP_SET/152               #127=     $126                 ?253                	;0
252  176   QM_ASSIGN/22              #127=     173:''               ?0                  	;0
253  176   ADD_ARRAY_ELEMENT/72      #123=     #127                 174:'tvg_id'        	;0
254  176   INIT_METHOD_CALL/112      ?0        16?11                175:'getTitle'      	;0
255  176   DO_FCALL/60               $128=     ?0                   ?0                  	;0
256  176   JMP_SET/152               #129=     $128                 ?258                	;0
257  176   QM_ASSIGN/22              #129=     177:''               ?0                  	;0
258  176   ADD_ARRAY_ELEMENT/72      #123=     #129                 178:'title'         	;0
259  176   INIT_METHOD_CALL/112      ?0        16?11                179:'getAttribute'  	;1
260  176   SEND_VAL_EX/116           ?80       181:'group-title'    ?1                  	;0
261  176   DO_FCALL/60               $130=     ?0                   ?0                  	;0
262  176   JMP_SET/152               #131=     $130                 ?264                	;0
263  176   QM_ASSIGN/22              #131=     182:''               ?0                  	;0
264  176   ADD_ARRAY_ELEMENT/72      #123=     #131                 183:'category'      	;0
265  176   ADD_ARRAY_ELEMENT/72      #123=     16?14                184:'exists'        	;0
266  176   ASSIGN_DIM/147            ?77       16?0                 ?2670194944         	;0
267  176   OP_DATA/137               ?0        #123                 ?0                  	;0
268  180   NOP/0                     ?0        ?0                   ?0                  	;1
269  180   GOTO/253                  ?0        ?182                 ?185                	;0
270  181   JMP/42                    ?0        ?134                 ?0                  	;0	>>134
271  181   FE_FREE/127               ?0        $87                  ?0                  	;0	<<133
272  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'count'         	;1
273  184   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
274  184   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
275  184   IS_EQUAL/17               #133=     $132                 188:0               	;0
276  184   BOOL_NOT/13               #134=     #133                 ?0                  	;0
277  184   JMPZ/43                   ?0        #134                 ?279                	;0	>>279
278  185   GOTO/253                  ?0        ?122                 ?189                	;0
279  187   FETCH_CONSTANT/99         #135=     ?0                   190:'STATUS_NO_SOURCES'	;16	<<277
280  187   ASSIGN/38                 ?91       16?8                 #135                	;0
281  188   GOTO/253                  ?0        ?121                 ?193                	;0
282  191   ECHO/40                   ?0        194:'"'              ?0                  	;0
283  192   FETCH_IS/89               $137=     195:'_SERVER'        ?0                  	;0
284  192   ISSET_ISEMPTY_DIM_OBJ/115 #138=     $137                 196:'HTTP_X_REQUESTED_WITH'	;16777216
285  192   BOOL_NOT/13               #139=     #138                 ?0                  	;0
286  192   JMPZ_EX/46                #139=     #139                 ?294                	;0	>>294
287  192   INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'strtolower'    	;1
288  192   FETCH_FUNC_ARG/92         $140=     199:'_SERVER'        ?0                  	;1
289  192   FETCH_DIM_FUNC_ARG/93     $141=     $140                 200:'HTTP_X_REQUESTED_WITH'	;1
290  192   SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
291  192   DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
292  192   IS_EQUAL/17               #143=     $142                 201:'xmlhttprequest'	;0
293  192   BOOL/52                   #139=     #143                 ?0                  	;0
294  192   BOOL_NOT/13               #144=     #139                 ?0                  	;0	<<286
295  192   JMPZ/43                   ?0        #144                 ?297                	;0	>>297
296  193   GOTO/253                  ?0        ?298                 ?202                	;0
297  195   ECHO/40                   ?0        203:' style="display: none;"' ?0                  	;0	<<295
298  197   GOTO/253                  ?0        ?401                 ?204                	;0
299  199   FETCH_DIM_R/81            $145=     16?16                205:'native_frames' 	;0
300  199   ECHO/40                   ?0        $145                 ?0                  	;0
301  200   ECHO/40                   ?0        206:'</label>
                                                <div class="col-md-3">
                                                    <input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="remove_subtitles">' ?0                  	;0
302  201   FETCH_DIM_R/81            $146=     16?16                207:'remove_existing_subtitles'	;0
303  201   ECHO/40                   ?0        $146                 ?0                  	;0
304  202   ECHO/40                   ?0        208:' <i title="'    ?0                  	;0
305  203   FETCH_DIM_R/81            $147=     16?16                209:'episode_tooltip_3'	;0
306  203   ECHO/40                   ?0        $147                 ?0                  	;0
307  204   GOTO/253                  ?0        ?742                 ?210                	;0
308  206   ECHO/40                   ?0        211:'					<h4 class="page-title">' ?0                  	;0
309  207   FETCH_DIM_R/81            $148=     212:array (
  1 => 'Stream',
  2 => 'Movie',
) 16?1                	;0
310  207   ECHO/40                   ?0        $148                 ?0                  	;0
311  208   ECHO/40                   ?0        213:' Review</h4>
				</div>
			</div>
		</div>
        ' ?0                  	;0
312  209   ISSET_ISEMPTY_CV/197      #149=     16?0                 ?0                  	;33554432
313  209   BOOL_NOT/13               #150=     #149                 ?0                  	;0
314  209   JMPZ/43                   ?0        #150                 ?316                	;0	>>316
315  210   GOTO/253                  ?0        ?822                 ?214                	;0
316  212   ECHO/40                   ?0        215:'        <div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
                        <div class="form-group row mb-4">
                            <div class="col-md-12">
                                <h4 class="header-title">Category Creation</h4>
                                <p class="sub-header">
                                    You can create categories by typing them in the below box, this will allow you to quickly add categories to the imported results.
                                </p>
                            </div>
                            <div class="col-md-12">
                                <select name="category_selection[]" id="category_selection" class="form-control col-md-12 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                    ' ?0                  	;0	<<314
317  213   GOTO/253                  ?0        ?340                 ?216                	;0
318  215   ASSIGN_DIM/147            ?106      16?17                217:'review'        	;0
319  215   OP_DATA/137               ?0        218:array (
)        ?0                  	;0
320  216   ASSIGN_DIM/147            $153=     16?17                220:'notes'         	;0
321  216   OP_DATA/137               ?0        221:''               ?0                  	;0
322  216   ASSIGN_DIM/147            ?107      16?17                219:'custom_sid'    	;0
323  216   OP_DATA/137               ?0        $153                 ?0                  	;0
324  217   ASSIGN/38                 ?109      16?18                222:array (
)       	;0
325  218   INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'F769e3f0C739D1a6'	;1
326  218   INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'intval'        	;1
327  218   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
328  218   DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
329  218   FETCH_DIM_FUNC_ARG/93     $156=     227:array (
  1 => 'live',
  2 => 'movie',
) $155                	;1
330  218   SEND_VAR_EX/66            ?80       $156                 ?1                  	;0
331  218   DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
332  218   FE_RESET_R/77             $158=     $157                 ?338                	;0
333  218   FE_FETCH_R/78             ?0        $158                 16?19               	;338	>>338	<<337
334  219   FETCH_DIM_R/81            $160=     16?19                228:'id'            	;0
335  219   ASSIGN_DIM/147            ?114      16?18                ?1                  	;0
336  219   OP_DATA/137               ?0        $160                 ?0                  	;0
337  220   JMP/42                    ?0        ?333                 ?0                  	;0	>>333
338  220   FE_FREE/127               ?0        $158                 ?0                  	;0	<<332
339  223   GOTO/253                  ?0        ?853                 ?229                	;0
340  225   FE_RESET_R/77             $161=     16?20                ?350                	;0
341  225   FE_FETCH_R/78             ?0        $161                 16?19               	;350	>>350	<<349
342  226   ECHO/40                   ?0        230:'                                    <option selected value="' ?0                  	;0
343  227   FETCH_DIM_R/81            $162=     16?19                231:'id'            	;0
344  227   ECHO/40                   ?0        $162                 ?0                  	;0
345  228   ECHO/40                   ?0        232:'">'             ?0                  	;0
346  229   FETCH_DIM_R/81            $163=     16?19                233:'category_name' 	;0
347  229   ECHO/40                   ?0        $163                 ?0                  	;0
348  230   ECHO/40                   ?0        234:'</option>
                                    ' ?0                  	;0
349  231   JMP/42                    ?0        ?341                 ?0                  	;0	>>341
350  231   FE_FREE/127               ?0        $161                 ?0                  	;0	<<340
351  234   ECHO/40                   ?0        235:'                                </select>
                            </div>
                        </div>
                        ' ?0                  	;0
352  235   IS_EQUAL/17               #164=     16?1                 236:1               	;0
353  235   JMPZ/43                   ?0        #164                 ?355                	;0	>>355
354  236   GOTO/253                  ?0        ?53                  ?237                	;0
355  238   ECHO/40                   ?0        238:'                        <div class="form-group row">
                            <div class="col-md-12">
                                <h4 class="header-title">Movie Import</h4>
                                <p class="sub-header" style="margin-bottom: 0;">
                                    To import a movie, ensure the checkbox next to it is selected. You will need to go to each page for that page of movies to be included in the import.
                                </p>
                            </div>
                        </div>
                        ' ?0                  	;0	<<353
356  239   GOTO/253                  ?0        ?52                  ?239                	;0
357  241   ECHO/40                   ?0        240:'">
                                                </div>
                                            </div>
                                            ' ?0                  	;0
358  243   ECHO/40                   ?0        241:'                                        </div> 
                                    </div> 
                                    <ul class="list-inline wizard mb-0">
                                        <li class="prevb list-inline-item">
                                            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                        </li>
                                        <li class="nextb list-inline-item float-right">
                                            <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="load-balancing">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="servers">Server Tree</label>
                                                <div class="col-md-9">
                                                    <div id="server_tree"></div>
                                                </div>
                                            </div>
                                            ' ?0                  	;0
359  244   IS_EQUAL/17               #165=     16?1                 242:1               	;0
360  244   BOOL_NOT/13               #166=     #165                 ?0                  	;0
361  244   JMPZ/43                   ?0        #166                 ?363                	;0	>>363
362  245   GOTO/253                  ?0        ?46                  ?243                	;0
363  247   ECHO/40                   ?0        244:'                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="on_demand">On-Demand Servers</label>
                                                <div class="col-md-9">
                                                    <select name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                        ' ?0                  	;0	<<361
364  248   GOTO/253                  ?0        ?374                 ?245                	;0
365  250   GOTO/253                  ?0        ?811                 ?246                	;0
366  252   ECHO/40                   ?0        247:'                        <input type="hidden" name="post_data" value=\'' ?0                  	;0
367  253   ECHO/40                   ?0        16?17                ?0                  	;0
368  254   ECHO/40                   ?0        248:'\' />
                        <input type="hidden" name="type" value=\'' ?0                  	;0
369  255   GOTO/253                  ?0        ?1098                ?249                	;0
370  257   GOTO/253                  ?0        ?372                 ?250                	;0
371  259   ECHO/40                   ?0        251:'                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Invalid playlist selected, please ensure the playlist is in M3U format.
                </div>
                ' ?0                  	;0
372  261   ECHO/40                   ?0        252:'				<div class="card">
					<div class="card-body">
                        ' ?0                  	;0
373  262   GOTO/253                  ?0        ?4                   ?253                	;0
374  264   FE_RESET_R/77             $167=     16?6                 ?384                	;0
375  264   FE_FETCH_R/78             ?0        $167                 16?7                	;384	>>384	<<383
376  265   ECHO/40                   ?0        254:'                                                        <option value="' ?0                  	;0
377  266   FETCH_DIM_R/81            $168=     16?7                 255:'id'            	;0
378  266   ECHO/40                   ?0        $168                 ?0                  	;0
379  267   ECHO/40                   ?0        256:'">'             ?0                  	;0
380  268   FETCH_DIM_R/81            $169=     16?7                 257:'server_name'   	;0
381  268   ECHO/40                   ?0        $169                 ?0                  	;0
382  269   ECHO/40                   ?0        258:'</option>
                                                        ' ?0                  	;0
383  270   JMP/42                    ?0        ?375                 ?0                  	;0	>>375
384  270   FE_FREE/127               ?0        $167                 ?0                  	;0	<<374
385  273   ECHO/40                   ?0        259:'                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="tv_archive_server_id">Timeshift Server</label>
                                                <div class="col-md-3">
                                                    <select name="tv_archive_server_id" id="tv_archive_server_id" class="form-control" data-toggle="select2">
                                                        <option value="0">Disabled</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="tv_archive_duration">Timeshift Days</label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" id="tv_archive_duration" name="tv_archive_duration" value="0">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="vframes_server_id">Thumbnails</label>
                                                <div class="col-md-3">
                                                    <select name="vframes_server_id" id="vframes_server_id" class="form-control" data-toggle="select2">
                                                        <option value="0">Disabled</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="llod">Low Latency On-Demand</label>
                                                <div class="col-md-3">
                                                    <select name="llod" id="llod" class="form-control" data-toggle="select2">
                                                        ' ?0                  	;0
386  274   FE_RESET_R/77             $170=     260:array (
  0 => 'Disabled',
  1 => 'LLOD v2 - FFMPEG',
  2 => 'LLOD v3 - PHP',
) ?395                	;0
387  274   FE_FETCH_R/78             #171=     $170                 16?21               	;395	>>395	<<394
388  274   ASSIGN/38                 ?127      16?22                #171                	;0
389  275   ECHO/40                   ?0        261:'                                                        <option value="' ?0                  	;0
390  276   ECHO/40                   ?0        16?22                ?0                  	;0
391  277   ECHO/40                   ?0        262:'">'             ?0                  	;0
392  278   ECHO/40                   ?0        16?21                ?0                  	;0
393  279   ECHO/40                   ?0        263:'</option>
                                                        ' ?0                  	;0
394  280   JMP/42                    ?0        ?387                 ?0                  	;0	>>387
395  280   FE_FREE/127               ?0        $170                 ?0                  	;0	<<386
396  283   GOTO/253                  ?0        ?45                  ?264                	;0
397  285   GOTO/253                  ?0        ?399                 ?265                	;0
398  287   ECHO/40                   ?0        266:'Auto-Start Streams' ?0                  	;0
399  289   ECHO/40                   ?0        267:'</label>
                                                <div class="col-md-3">
                                                    <input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <ul class="list-inline wizard mb-0">
                                        <li class="prevb list-inline-item">
                                            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                        </li>
                                        <li class="nextb list-inline-item float-right">
                                            <input name="submit_stream" type="submit" class="btn btn-primary" value="Review" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        ' ?0                  	;0
400  290   GOTO/253                  ?0        ?365                 ?268                	;0
401  292   ECHO/40                   ?0        269:'>
    <div class="container-fluid">
        <form' ?0                  	;0
402  293   ISSET_ISEMPTY_CV/197      #173=     16?0                 ?0                  	;33554432
403  293   JMPZ/43                   ?0        #173                 ?405                	;0	>>405
404  294   GOTO/253                  ?0        ?406                 ?270                	;0
405  296   ECHO/40                   ?0        271:' enctype="multipart/form-data"' ?0                  	;0	<<403
406  298   ECHO/40                   ?0        272:' action="./review?type=' ?0                  	;0
407  299   GOTO/253                  ?0        ?34                  ?273                	;0
408  301   ECHO/40                   ?0        274:'                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="direct_source">' ?0                  	;0
409  302   FETCH_DIM_R/81            $174=     16?16                275:'direct_source' 	;0
410  302   ECHO/40                   ?0        $174                 ?0                  	;0
411  303   ECHO/40                   ?0        276:' <i title="'    ?0                  	;0
412  304   FETCH_DIM_R/81            $175=     16?16                277:'episode_tooltip_1'	;0
413  304   ECHO/40                   ?0        $175                 ?0                  	;0
414  305   ECHO/40                   ?0        278:'" class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="read_native">' ?0                  	;0
415  306   GOTO/253                  ?0        ?299                 ?279                	;0
416  309   ECHO/40                   ?0        280:'                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ' ?0                  	;0
417  310   ASSIGN/38                 ?131      16?23                281:0               	;0
418  311   FE_RESET_R/77             $177=     16?0                 ?672                	;0
419  311   FE_FETCH_R/78             ?0        $177                 16?24               	;672	>>672	<<671
420  312   NOP/0                     ?0        ?0                   ?0                  	;1
421  312   GOTO/253                  ?0        ?643                 ?282                	;0
422  314   ECHO/40                   ?0        283:'" type="button" title="View EPG API" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white far fa-circle"></i></button>
                                                <a href="javascript: void(0);" title="' ?0                  	;0
423  315   INIT_FCALL_BY_NAME/59     ?0        ?0                   284:'htmlspecialchars'	;1
424  315   FETCH_DIM_FUNC_ARG/93     $178=     16?24                286:'url'           	;1
425  315   SEND_VAR_EX/66            ?80       $178                 ?1                  	;0
426  315   DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
427  315   ECHO/40                   ?0        $179                 ?0                  	;0
428  316   ECHO/40                   ?0        287:'" class="tooltip-left btn btn-primary btn-xs waves-effect waves-light"><i class="text-white mdi mdi-link"></i></a>
                                            </td>
                                            ' ?0                  	;0
429  318   ECHO/40                   ?0        288:'                                        </tr>
                                        ' ?0                  	;0
430  319   NOP/0                     ?0        ?0                   ?0                  	;1
431  319   GOTO/253                  ?0        ?463                 ?289                	;0
432  321   ECHO/40                   ?0        290:'                                        <tr id="stream_' ?0                  	;0
433  322   ECHO/40                   ?0        16?23                ?0                  	;0
434  323   ECHO/40                   ?0        291:'" data-id="'    ?0                  	;0
435  324   ECHO/40                   ?0        16?23                ?0                  	;0
436  325   ECHO/40                   ?0        292:'">
                                            <td class="text-center">
                                                <div class="checkbox checkbox-single checkbox-offset ' ?0                  	;0
437  326   NOP/0                     ?0        ?0                   ?0                  	;1
438  326   GOTO/253                  ?0        ?465                 ?293                	;0
439  328   ECHO/40                   ?0        16?23                ?0                  	;0
440  329   ECHO/40                   ?0        294:'">'             ?0                  	;0
441  330   ECHO/40                   ?0        16?25                ?0                  	;0
442  331   ECHO/40                   ?0        295:'</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="name_' ?0                  	;0
443  332   ECHO/40                   ?0        16?23                ?0                  	;0
444  333   NOP/0                     ?0        ?0                   ?0                  	;1
445  333   GOTO/253                  ?0        ?525                 ?296                	;0
446  335   BOOL_NOT/13               #180=     16?26                ?0                  	;0
447  335   JMPZ/43                   ?0        #180                 ?450                	;0	>>450
448  336   NOP/0                     ?0        ?0                   ?0                  	;1
449  336   GOTO/253                  ?0        ?452                 ?297                	;0
450  338   ASSIGN_DIM/147            ?136      16?27                ?4397406            	;0	<<447
451  338   OP_DATA/137               ?0        16?23                ?0                  	;0
452  340   INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'strlen'        	;1
453  340   FETCH_DIM_FUNC_ARG/93     $182=     16?24                300:'logo'          	;1
454  340   SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
455  340   DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
456  340   IS_SMALLER/19             #184=     301:0                $183                	;0
457  340   JMPZ/43                   ?0        #184                 ?460                	;0	>>460
458  341   NOP/0                     ?0        ?0                   ?0                  	;1
459  341   GOTO/253                  ?0        ?626                 ?302                	;0
460  343   ASSIGN/38                 ?140      16?25                303:'<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'\'><img class=\'lazyload\' src=\'\' /></a>'	;0	<<457
461  344   NOP/0                     ?0        ?0                   ?0                  	;1
462  344   GOTO/253                  ?0        ?624                 ?304                	;0
463  347   NOP/0                     ?0        ?0                   ?0                  	;1
464  347   GOTO/253                  ?0        ?671                 ?305                	;0
465  349   FETCH_DIM_R/81            $186=     16?24                306:'exists'        	;0
466  349   JMPZ/43                   ?0        $186                 ?469                	;0	>>469
467  350   NOP/0                     ?0        ?0                   ?0                  	;1
468  350   GOTO/253                  ?0        ?472                 ?307                	;0
469  352   ECHO/40                   ?0        308:'checkbox-primary' ?0                  	;0	<<466
470  353   NOP/0                     ?0        ?0                   ?0                  	;1
471  353   GOTO/253                  ?0        ?563                 ?309                	;0
472  355   ECHO/40                   ?0        310:'checkbox-warning' ?0                  	;0
473  356   NOP/0                     ?0        ?0                   ?0                  	;1
474  356   GOTO/253                  ?0        ?563                 ?311                	;0
475  358   INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'htmlspecialchars'	;1
476  358   FETCH_DIM_FUNC_ARG/93     $187=     16?24                314:'title'         	;1
477  358   SEND_VAR_EX/66            ?80       $187                 ?1                  	;0
478  358   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
479  358   ECHO/40                   ?0        $188                 ?0                  	;0
480  359   ECHO/40                   ?0        315:'<br/>'          ?0                  	;0
481  360   INIT_FCALL_BY_NAME/59     ?0        ?0                   316:'htmlspecialchars'	;1
482  360   FETCH_DIM_FUNC_ARG/93     $189=     16?24                318:'url'           	;1
483  360   SEND_VAR_EX/66            ?80       $189                 ?1                  	;0
484  360   DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
485  360   ECHO/40                   ?0        $190                 ?0                  	;0
486  361   ECHO/40                   ?0        319:'" class="tooltip-left btn btn-primary btn-xs waves-effect waves-light"><i class="text-white mdi mdi-information-variant"></i></a>
                                            </td>
                                            ' ?0                  	;0
487  362   NOP/0                     ?0        ?0                   ?0                  	;1
488  362   GOTO/253                  ?0        ?429                 ?320                	;0
489  363   NOP/0                     ?0        ?0                   ?0                  	;1
490  363   GOTO/253                  ?0        ?637                 ?321                	;0
491  365   NOP/0                     ?0        ?0                   ?0                  	;1
492  365   GOTO/253                  ?0        ?496                 ?322                	;0
493  367   CONCAT/8                  #191=     323:'scanEPG('       16?23               	;0
494  367   CONCAT/8                  #192=     #191                 324:');'            	;0
495  367   ECHO/40                   ?0        #192                 ?0                  	;0
496  369   ECHO/40                   ?0        325:'" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-magnify text-white"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <select id="category_id_' ?0                  	;0
497  370   NOP/0                     ?0        ?0                   ?0                  	;1
498  370   GOTO/253                  ?0        ?569                 ?326                	;0
499  372   ECHO/40                   ?0        327:'" class="form-control epg_api" data-toggle="select2"></select>
                                            </td>
                                            <td style="width: 80px;">
                                                <input type="text" class="form-control text-center" id="epg_lang_' ?0                  	;0
500  373   ECHO/40                   ?0        16?23                ?0                  	;0
501  374   ECHO/40                   ?0        328:'" readonly value=""></input>
                                            </td>
                                            <td class="text-center">
                                                <button onClick="clearEPG(this);" id="clear_epg_' ?0                  	;0
502  375   ECHO/40                   ?0        16?23                ?0                  	;0
503  376   ECHO/40                   ?0        329:'" data-id="'    ?0                  	;0
504  377   NOP/0                     ?0        ?0                   ?0                  	;1
505  377   GOTO/253                  ?0        ?550                 ?330                	;0
506  379   ECHO/40                   ?0        331:'" class="form-control select2-multiple bouquet" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                    ' ?0                  	;0
507  380   FE_RESET_R/77             $193=     16?28                ?517                	;0
508  380   FE_FETCH_R/78             ?0        $193                 16?29               	;517	>>517	<<516
509  381   ECHO/40                   ?0        332:'                                                    <option value="' ?0                  	;0
510  382   FETCH_DIM_R/81            $194=     16?29                333:'id'            	;0
511  382   ECHO/40                   ?0        $194                 ?0                  	;0
512  383   ECHO/40                   ?0        334:'">'             ?0                  	;0
513  384   FETCH_DIM_R/81            $195=     16?29                335:'bouquet_name'  	;0
514  384   ECHO/40                   ?0        $195                 ?0                  	;0
515  385   ECHO/40                   ?0        336:'</option>
                                                    ' ?0                  	;0
516  386   JMP/42                    ?0        ?508                 ?0                  	;0	>>508
517  386   FE_FREE/127               ?0        $193                 ?0                  	;0	<<507
518  389   ECHO/40                   ?0        337:'                                                </select>
                                            </td>
                                            ' ?0                  	;0
519  390   IS_EQUAL/17               #196=     16?1                 338:1               	;0
520  390   JMPZ/43                   ?0        #196                 ?523                	;0	>>523
521  391   NOP/0                     ?0        ?0                   ?0                  	;1
522  391   GOTO/253                  ?0        ?637                 ?339                	;0
523  393   NOP/0                     ?0        ?0                   ?0                  	;1	<<520
524  393   GOTO/253                  ?0        ?617                 ?340                	;0
525  395   ECHO/40                   ?0        341:'" value="'      ?0                  	;0
526  396   INIT_FCALL_BY_NAME/59     ?0        ?0                   342:'htmlspecialchars'	;1
527  396   FETCH_DIM_FUNC_ARG/93     $197=     16?24                344:'title'         	;1
528  396   SEND_VAR_EX/66            ?80       $197                 ?1                  	;0
529  396   DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
530  396   ECHO/40                   ?0        $198                 ?0                  	;0
531  397   ECHO/40                   ?0        345:'">
                                                    <div class="input-group-append">
                                                        <a href="javascript: void(0);" onClick="' ?0                  	;0
532  398   IS_EQUAL/17               #199=     16?1                 346:1               	;0
533  398   JMPZ/43                   ?0        #199                 ?536                	;0	>>536
534  399   NOP/0                     ?0        ?0                   ?0                  	;1
535  399   GOTO/253                  ?0        ?493                 ?347                	;0
536  401   CONCAT/8                  #200=     348:'scanTMDb('      16?23               	;0	<<533
537  401   CONCAT/8                  #201=     #200                 349:');'            	;0
538  401   ECHO/40                   ?0        #201                 ?0                  	;0
539  402   NOP/0                     ?0        ?0                   ?0                  	;1
540  402   GOTO/253                  ?0        ?491                 ?350                	;0
541  404   ECHO/40                   ?0        351:'" type="checkbox" class="activate ' ?0                  	;0
542  405   FETCH_DIM_R/81            $202=     16?24                352:'exists'        	;0
543  405   JMPZ/43                   ?0        $202                 ?546                	;0	>>546
544  406   NOP/0                     ?0        ?0                   ?0                  	;1
545  406   GOTO/253                  ?0        ?547                 ?353                	;0
546  408   ECHO/40                   ?0        354:' checked'       ?0                  	;0	<<543
547  410   ECHO/40                   ?0        355:'">
                                                    <label></label>
                                                </div>
                                            </td>
                                            <td class="text-center" id="picon_' ?0                  	;0
548  411   NOP/0                     ?0        ?0                   ?0                  	;1
549  411   GOTO/253                  ?0        ?439                 ?356                	;0
550  413   ECHO/40                   ?0        16?23                ?0                  	;0
551  414   ECHO/40                   ?0        357:'" type="button" title="Clear EPG" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white fas fa-times"></i></button>
                                                <button onClick="viewEPG(this);" id="view_epg_' ?0                  	;0
552  415   ECHO/40                   ?0        16?23                ?0                  	;0
553  416   ECHO/40                   ?0        358:'" data-id="'    ?0                  	;0
554  417   ECHO/40                   ?0        16?23                ?0                  	;0
555  418   NOP/0                     ?0        ?0                   ?0                  	;1
556  418   GOTO/253                  ?0        ?422                 ?359                	;0
557  421   ECHO/40                   ?0        360:'                                                </select>
                                            </td>
                                            <td>
                                                <select id="bouquets_' ?0                  	;0
558  422   ECHO/40                   ?0        16?23                ?0                  	;0
559  423   ECHO/40                   ?0        361:'" data-id="'    ?0                  	;0
560  424   ECHO/40                   ?0        16?23                ?0                  	;0
561  425   NOP/0                     ?0        ?0                   ?0                  	;1
562  425   GOTO/253                  ?0        ?506                 ?362                	;0
563  428   ECHO/40                   ?0        363:'">
                                                    <input id="check_' ?0                  	;0
564  429   ECHO/40                   ?0        16?23                ?0                  	;0
565  430   ECHO/40                   ?0        364:'" data-id="'    ?0                  	;0
566  431   ECHO/40                   ?0        16?23                ?0                  	;0
567  432   NOP/0                     ?0        ?0                   ?0                  	;1
568  432   GOTO/253                  ?0        ?541                 ?365                	;0
569  434   ECHO/40                   ?0        16?23                ?0                  	;0
570  435   ECHO/40                   ?0        366:'" class="form-control select2-multiple category_id" data-id="' ?0                  	;0
571  436   ECHO/40                   ?0        16?23                ?0                  	;0
572  437   ECHO/40                   ?0        367:'" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
                                                    ' ?0                  	;0
573  438   FE_RESET_R/77             $203=     16?20                ?614                	;0
574  438   FE_FETCH_R/78             ?0        $203                 16?19               	;614	>>614	<<613
575  439   NOP/0                     ?0        ?0                   ?0                  	;1
576  439   NOP/0                     ?0        ?0                   ?0                  	;1
577  439   GOTO/253                  ?0        ?578                 ?368                	;0
578  441   ECHO/40                   ?0        369:'                                                    <option ' ?0                  	;0
579  442   ISSET_ISEMPTY_CV/197      #204=     16?26                ?0                  	;33554432
580  442   BOOL_NOT/13               #205=     #204                 ?0                  	;0
581  442   JMPZ/43                   ?0        #205                 ?585                	;0	>>585
582  443   NOP/0                     ?0        ?0                   ?0                  	;1
583  443   NOP/0                     ?0        ?0                   ?0                  	;1
584  443   GOTO/253                  ?0        ?600                 ?370                	;0
585  445   INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'intval'        	;1	<<581
586  445   FETCH_DIM_R/81            $206=     16?26                373:'id'            	;0
587  445   FETCH_DIM_R/81            $207=     16?19                374:'id'            	;0
588  445   IS_EQUAL/17               #208=     $206                 $207                	;0
589  445   SEND_VAL_EX/116           ?80       #208                 ?1                  	;0
590  445   DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
591  445   BOOL_NOT/13               #210=     $209                 ?0                  	;0
592  445   JMPZ/43                   ?0        #210                 ?596                	;0	>>596
593  446   NOP/0                     ?0        ?0                   ?0                  	;1
594  446   NOP/0                     ?0        ?0                   ?0                  	;1
595  446   GOTO/253                  ?0        ?597                 ?375                	;0
596  448   ECHO/40                   ?0        376:'selected '      ?0                  	;0	<<592
597  450   NOP/0                     ?0        ?0                   ?0                  	;1
598  450   NOP/0                     ?0        ?0                   ?0                  	;1
599  450   GOTO/253                  ?0        ?600                 ?377                	;0
600  453   ECHO/40                   ?0        378:'value="'        ?0                  	;0
601  454   FETCH_DIM_R/81            $211=     16?19                379:'id'            	;0
602  454   ECHO/40                   ?0        $211                 ?0                  	;0
603  455   ECHO/40                   ?0        380:'">'             ?0                  	;0
604  456   FETCH_DIM_R/81            $212=     16?19                381:'category_name' 	;0
605  456   ECHO/40                   ?0        $212                 ?0                  	;0
606  457   NOP/0                     ?0        ?0                   ?0                  	;1
607  457   NOP/0                     ?0        ?0                   ?0                  	;1
608  457   GOTO/253                  ?0        ?609                 ?382                	;0
609  459   ECHO/40                   ?0        383:'</option>
                                                    ' ?0                  	;0
610  461   NOP/0                     ?0        ?0                   ?0                  	;1
611  461   NOP/0                     ?0        ?0                   ?0                  	;1
612  461   GOTO/253                  ?0        ?613                 ?384                	;0
613  462   JMP/42                    ?0        ?574                 ?0                  	;0	>>574
614  462   FE_FREE/127               ?0        $203                 ?0                  	;0	<<573
615  464   NOP/0                     ?0        ?0                   ?0                  	;1
616  464   GOTO/253                  ?0        ?557                 ?385                	;0
617  466   ECHO/40                   ?0        386:'                                            <td>
                                                <select id="tmdb_search_' ?0                  	;0
618  467   ECHO/40                   ?0        16?23                ?0                  	;0
619  468   ECHO/40                   ?0        387:'" data-id="'    ?0                  	;0
620  469   ECHO/40                   ?0        16?23                ?0                  	;0
621  470   ECHO/40                   ?0        388:'" class="form-control tmdb_search" data-toggle="select2"></select>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript: void(0);" title="' ?0                  	;0
622  471   NOP/0                     ?0        ?0                   ?0                  	;1
623  471   GOTO/253                  ?0        ?475                 ?389                	;0
624  473   NOP/0                     ?0        ?0                   ?0                  	;1
625  473   GOTO/253                  ?0        ?635                 ?390                	;0
626  475   ASSIGN_DIM/147            ?168      16?30                ?0                  	;0
627  475   OP_DATA/137               ?0        16?23                ?0                  	;0
628  476   FETCH_DIM_R/81            $214=     16?24                391:'logo'          	;0
629  476   CONCAT/8                  #215=     392:'<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'./resize?maxw=512&maxh=512&url=' $214                	;0
630  476   CONCAT/8                  #216=     #215                 393:'\'><img class=\'lazyload\' src=\'./resize?maxw=96&maxh=32&url='	;0
631  476   FETCH_DIM_R/81            $217=     16?24                394:'logo'          	;0
632  476   CONCAT/8                  #218=     #216                 $217                	;0
633  476   CONCAT/8                  #219=     #218                 395:'\' /></a>'     	;0
634  476   ASSIGN/38                 ?175      16?25                #219                	;0
635  478   NOP/0                     ?0        ?0                   ?0                  	;1
636  478   GOTO/253                  ?0        ?432                 ?396                	;0
637  481   ECHO/40                   ?0        397:'                                            <td>
                                                <select id="epg_api_' ?0                  	;0
638  482   ECHO/40                   ?0        16?23                ?0                  	;0
639  483   ECHO/40                   ?0        398:'" data-id="'    ?0                  	;0
640  484   ECHO/40                   ?0        16?23                ?0                  	;0
641  485   NOP/0                     ?0        ?0                   ?0                  	;1
642  485   GOTO/253                  ?0        ?499                 ?399                	;0
643  487   POST_INC/36               #221=     16?23                ?0                  	;0
644  487   FREE/70                   ?0        #221                 ?0                  	;0
645  488   ASSIGN/38                 ?177      16?26                400:NULL            	;0
646  489   ASSIGN/38                 ?178      16?31                401:0               	;0
647  490   FE_RESET_R/77             $224=     16?20                ?668                	;0
648  490   FE_FETCH_R/78             ?0        $224                 16?19               	;668	>>668	<<667
649  491   INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'similar_text'  	;3
650  491   FETCH_DIM_FUNC_ARG/93     $225=     16?19                404:'category_name' 	;1
651  491   SEND_VAR_EX/66            ?80       $225                 ?1                  	;0
652  491   FETCH_DIM_FUNC_ARG/93     $226=     16?24                405:'category'      	;2
653  491   SEND_VAR_EX/66            ?96       $226                 ?2                  	;0
654  491   SEND_VAR_EX/66            ?112      16?32                ?3                  	;0
655  491   DO_FCALL_BY_NAME/131      ?182      ?0                   ?0                  	;0
656  492   IS_SMALLER/19             #228=     16?31                16?32               	;0
657  492   JMPZ_EX/46                #228=     #228                 ?660                	;0	>>660
658  492   IS_SMALLER_OR_EQUAL/20    #229=     406:70               16?32               	;0
659  492   BOOL/52                   #228=     #229                 ?0                  	;0
660  492   BOOL_NOT/13               #230=     #228                 ?0                  	;0	<<657
661  492   JMPZ/43                   ?0        #230                 ?665                	;0	>>665
662  493   NOP/0                     ?0        ?0                   ?0                  	;1
663  493   NOP/0                     ?0        ?0                   ?0                  	;1
664  493   GOTO/253                  ?0        ?667                 ?407                	;0
665  495   ASSIGN/38                 ?186      16?26                16?19               	;0	<<661
666  496   ASSIGN/38                 ?187      16?31                16?32               	;0
667  498   JMP/42                    ?0        ?648                 ?0                  	;0	>>648
668  498   FE_FREE/127               ?0        $224                 ?0                  	;0	<<647
669  501   NOP/0                     ?0        ?0                   ?0                  	;1
670  501   GOTO/253                  ?0        ?446                 ?408                	;0
671  502   JMP/42                    ?0        ?419                 ?0                  	;0	>>419
672  502   FE_FREE/127               ?0        $177                 ?0                  	;0	<<418
673  505   GOTO/253                  ?0        ?810                 ?409                	;0
674  508   FETCH_STATIC_PROP_IS/176  $233=     410:'rRequest'       411:'XUI'           	;0
675  508   ISSET_ISEMPTY_DIM_OBJ/115 #234=     $233                 413:'post_data'     	;33554432
676  508   JMPZ/43                   ?0        #234                 ?678                	;0	>>678
677  509   GOTO/253                  ?0        ?1078                ?414                	;0
678  511   FETCH_IS/89               $235=     415:'_FILES'         ?0                  	;0	<<676
679  511   ISSET_ISEMPTY_DIM_OBJ/115 #236=     $235                 416:'m3u_file'      	;33554432
680  511   BOOL_NOT/13               #237=     #236                 ?0                  	;0
681  511   JMPZ/43                   ?0        #237                 ?683                	;0	>>683
682  512   GOTO/253                  ?0        ?1077                ?417                	;0
683  514   FETCH_STATIC_PROP_UNSET/178 $238=     418:'rRequest'       419:'XUI'           	;0	<<681
684  514   UNSET_DIM/75              ?0        $238                 421:'submit_stream' 	;0
685  515   INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'base64_encode' 	;1
686  515   INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'json_encode'   	;1
687  515   FETCH_STATIC_PROP_FUNC_ARG/177 $239=     426:'rRequest'       427:'XUI'           	;1
688  515   SEND_VAR_EX/66            ?80       $239                 ?1                  	;0
689  515   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
690  515   SEND_VAR_NO_REF_EX/50     ?80       $240                 ?1                  	;0
691  515   DO_FCALL_BY_NAME/131      $241=     ?0                   ?0                  	;0
692  515   ASSIGN/38                 ?197      16?17                $241                	;0
693  516   GOTO/253                  ?0        ?774                 ?429                	;0
694  518   IS_EQUAL/17               #243=     16?1                 430:1               	;0
695  518   JMPZ/43                   ?0        #243                 ?697                	;0	>>697
696  519   GOTO/253                  ?0        ?737                 ?431                	;0
697  521   INIT_STATIC_METHOD_CALL/113 ?0        432:'API'            434:'bB0Bf26077F756B6'	;1	<<695
698  521   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
699  521   DO_FCALL/60               $244=     ?0                   ?0                  	;0
700  521   ASSIGN/38                 ?200      16?33                $244                	;0
701  522   FETCH_DIM_R/81            $246=     16?33                436:'status'        	;0
702  522   ASSIGN/38                 ?202      16?8                 $246                	;0
703  523   FETCH_CONSTANT/99         #248=     ?0                   437:'STATUS_SUCCESS'	;16
704  523   IS_EQUAL/17               #249=     16?8                 #248                	;0
705  523   BOOL_NOT/13               #250=     #249                 ?0                  	;0
706  523   JMPZ/43                   ?0        #250                 ?708                	;0	>>708
707  524   GOTO/253                  ?0        ?736                 ?440                	;0
708  526   INIT_FCALL_BY_NAME/59     ?0        ?0                   441:'header'        	;1	<<706
709  526   FETCH_CONSTANT/99         #251=     ?0                   443:'STATUS_SUCCESS'	;16
710  526   CONCAT/8                  #252=     446:'Location: ./movies?status=' #251                	;0
711  526   SEND_VAL_EX/116           ?80       #252                 ?1                  	;0
712  526   DO_FCALL_BY_NAME/131      ?208      ?0                   ?0                  	;0
713  527   GOTO/253                  ?0        ?735                 ?447                	;0
714  529   INIT_FCALL_BY_NAME/59     ?0        ?0                   448:'htmlspecialchars'	;1
715  529   FETCH_DIM_FUNC_ARG/93     $254=     16?4                 450:'proxy'         	;1
716  529   FETCH_DIM_FUNC_ARG/93     $255=     $254                 451:'argument_default_value'	;1
717  529   SEND_VAR_EX/66            ?80       $255                 ?1                  	;0
718  529   DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
719  529   ECHO/40                   ?0        $256                 ?0                  	;0
720  530   ECHO/40                   ?0        452:'">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="cookie">Cookie <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="cookie" name="cookie" value="' ?0                  	;0
721  531   INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'htmlspecialchars'	;1
722  531   FETCH_DIM_FUNC_ARG/93     $257=     16?4                 455:'cookie'        	;1
723  531   FETCH_DIM_FUNC_ARG/93     $258=     $257                 456:'argument_default_value'	;1
724  531   SEND_VAR_EX/66            ?80       $258                 ?1                  	;0
725  531   DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
726  531   ECHO/40                   ?0        $259                 ?0                  	;0
727  532   ECHO/40                   ?0        457:'">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="headers">Headers <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="headers" name="headers" value="' ?0                  	;0
728  533   INIT_FCALL_BY_NAME/59     ?0        ?0                   458:'htmlspecialchars'	;1
729  533   FETCH_DIM_FUNC_ARG/93     $260=     16?4                 460:'headers'       	;1
730  533   FETCH_DIM_FUNC_ARG/93     $261=     $260                 461:'argument_default_value'	;1
731  533   SEND_VAR_EX/66            ?80       $261                 ?1                  	;0
732  533   DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
733  533   ECHO/40                   ?0        $262                 ?0                  	;0
734  534   GOTO/253                  ?0        ?357                 ?462                	;0
735  536   EXIT/79                   ?0        ?0                   ?0                  	;0
736  538   GOTO/253                  ?0        ?67                  ?463                	;0
737  540   INIT_STATIC_METHOD_CALL/113 ?0        464:'API'            466:'c880AAaF942BB5ee'	;1
738  540   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
739  540   DO_FCALL/60               $263=     ?0                   ?0                  	;0
740  540   ASSIGN/38                 ?219      16?33                $263                	;0
741  541   GOTO/253                  ?0        ?1249                ?468                	;0
742  543   ECHO/40                   ?0        469:'" class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="remove_subtitles" id="remove_subtitles" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Sometimes, in order to make a stream compatible with most devices, it must be transcoded. Please note that the transcode will only be applied to the server(s) that take the stream directly from the source, all other servers attached to the transcoding server will not transcode the stream." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-9">
                                                    <select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
                                                        <option selected value="0">Transcoding Disabled</option>
                                                        ' ?0                  	;0
743  544   FE_RESET_R/77             $265=     16?2                 ?753                	;0
744  544   FE_FETCH_R/78             ?0        $265                 16?3                	;753	>>753	<<752
745  545   ECHO/40                   ?0        470:'                                                        <option value="' ?0                  	;0
746  546   FETCH_DIM_R/81            $266=     16?3                 471:'profile_id'    	;0
747  546   ECHO/40                   ?0        $266                 ?0                  	;0
748  547   ECHO/40                   ?0        472:'">'             ?0                  	;0
749  548   FETCH_DIM_R/81            $267=     16?3                 473:'profile_name'  	;0
750  548   ECHO/40                   ?0        $267                 ?0                  	;0
751  549   ECHO/40                   ?0        474:'</option>
                                                        ' ?0                  	;0
752  550   JMP/42                    ?0        ?744                 ?0                  	;0	>>744
753  550   FE_FREE/127               ?0        $265                 ?0                  	;0	<<743
754  553   ECHO/40                   ?0        475:'                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="tmdb_language">TMDb Language</label>
                                                <div class="col-md-9">
                                                    <select name="tmdb_language" id="tmdb_language" class="form-control" data-toggle="select2">
                                                        ' ?0                  	;0
755  554   FE_RESET_R/77             $268=     16?34                ?772                	;0
756  554   FE_FETCH_R/78             #269=     $268                 16?35               	;772	>>772	<<771
757  554   ASSIGN/38                 ?225      16?36                #269                	;0
758  555   ECHO/40                   ?0        476:'                                                        <option' ?0                  	;0
759  556   FETCH_DIM_R/81            $271=     16?37                477:'tmdb_language' 	;0
760  556   IS_EQUAL/17               #272=     16?36                $271                	;0
761  556   BOOL_NOT/13               #273=     #272                 ?0                  	;0
762  556   JMPZ/43                   ?0        #273                 ?765                	;0	>>765
763  557   NOP/0                     ?0        ?0                   ?0                  	;1
764  557   GOTO/253                  ?0        ?766                 ?478                	;0
765  559   ECHO/40                   ?0        479:' selected'      ?0                  	;0	<<762
766  561   ECHO/40                   ?0        480:' value="'       ?0                  	;0
767  562   ECHO/40                   ?0        16?36                ?0                  	;0
768  563   ECHO/40                   ?0        481:'">'             ?0                  	;0
769  564   ECHO/40                   ?0        16?35                ?0                  	;0
770  565   ECHO/40                   ?0        482:'</option>
                                                        ' ?0                  	;0
771  566   JMP/42                    ?0        ?756                 ?0                  	;0	>>756
772  566   FE_FREE/127               ?0        $268                 ?0                  	;0	<<755
773  568   GOTO/253                  ?0        ?792                 ?483                	;0
774  570   INIT_FCALL_BY_NAME/59     ?0        ?0                   484:'f769E3f0c739D1a6'	;1
775  570   INIT_FCALL_BY_NAME/59     ?0        ?0                   486:'intval'        	;1
776  570   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
777  570   DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
778  570   FETCH_DIM_FUNC_ARG/93     $275=     488:array (
  1 => 'live',
  2 => 'movie',
) $274                	;1
779  570   SEND_VAR_EX/66            ?80       $275                 ?1                  	;0
780  570   DO_FCALL_BY_NAME/131      $276=     ?0                   ?0                  	;0
781  570   ASSIGN/38                 ?232      16?20                $276                	;0
782  571   INIT_FCALL_BY_NAME/59     ?0        ?0                   489:'f964B9222b35AdDD'	;0
783  571   DO_FCALL_BY_NAME/131      $278=     ?0                   ?0                  	;0
784  571   ASSIGN/38                 ?234      16?28                $278                	;0
785  572   ASSIGN/38                 ?235      16?15                491:array (
)       	;0
786  573   ASSIGN/38                 ?236      16?38                492:array (
)       	;0
787  574   INIT_METHOD_CALL/112      ?0        16?39                493:'query'         	;2
788  574   SEND_VAL_EX/116           ?80       495:'SELECT `stream_source` FROM `streams` WHERE `type` = ?;' ?1                  	;0
789  574   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
790  574   DO_FCALL/60               ?237      ?0                   ?0                  	;0
791  575   GOTO/253                  ?0        ?1193                ?496                	;0
792  578   ECHO/40                   ?0        497:'                                                    </select>
                                                </div>
                                            </div>
                                            ' ?0                  	;0
793  579   GOTO/253                  ?0        ?358                 ?498                	;0
794  581   ECHO/40                   ?0        499:'                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="gen_timestamps">Generate PTS <i title="Allow FFmpeg to generate presentation timestamps for you to achieve better synchronization with the stream codecs. In some streams this can cause de-sync." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="gen_timestamps" id="gen_timestamps" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                                <label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="You should always read live streams as non-native frames. However if you are streaming static video files, set this to true otherwise the encoding process will fail." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-2">
                                                    <input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="stream_all">Stream All Codecs <i title="This option will stream all codecs from your stream. Some streams have more than one audio/video/subtitles channels." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="stream_all" id="stream_all" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                                <label class="col-md-4 col-form-label" for="allow_record">Allow Recording</label>
                                                <div class="col-md-2">
                                                    <input name="allow_record" id="allow_record" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="direct_source">Direct Source <i title="Redirect clients to the source directly. Do not use if you want to keep your source secure." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                                <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the live stream through your servers via UDP. MPEG-TS and HLS is supported as an input format, however only MPEG-TS is supported as an output format to clients.<br/><br/>Experimental! This may not work for all streams." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-2">
                                                    <input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="rtmp_output">Output RTMP <i title="Enable RTMP output for this channel." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <input name="rtmp_output" id="rtmp_output" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                </div>
                                                <label class="col-md-4 col-form-label" for="probesize_ondemand">On Demand Probesize <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-2">
                                                    <input type="text" class="form-control" id="probesize_ondemand" name="probesize_ondemand" value="128000">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Sometimes, in order to make a stream compatible with most devices, it must be transcoded. Please note that the transcode will only be applied to the server(s) that take the stream directly from the source, all other servers attached to the transcoding server will not transcode the stream." class="tooltip text-secondary far fa-circle"></i></label>
                                                <div class="col-md-3">
                                                    <select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
                                                        <option selected value="0">Transcoding Disabled</option>
                                                        ' ?0                  	;0
795  582   GOTO/253                  ?0        ?14                  ?500                	;0
796  584   INIT_FCALL_BY_NAME/59     ?0        ?0                   501:'intval'        	;1
797  584   FETCH_STATIC_PROP_FUNC_ARG/177 $283=     503:'rRequest'       504:'XUI'           	;1
798  584   FETCH_DIM_FUNC_ARG/93     $284=     $283                 506:'type'          	;1
799  584   SEND_VAR_EX/66            ?80       $284                 ?1                  	;0
800  584   DO_FCALL_BY_NAME/131      $285=     ?0                   ?0                  	;0
801  584   ASSIGN/38                 ?241      16?1                 $285                	;0
802  586   GOTO/253                  ?0        ?674                 ?507                	;0
803  588   INIT_FCALL_BY_NAME/59     ?0        ?0                   508:'intval'        	;1
804  588   FETCH_STATIC_PROP_FUNC_ARG/177 $287=     510:'rRequest'       511:'XUI'           	;1
805  588   FETCH_DIM_FUNC_ARG/93     $288=     $287                 513:'type'          	;1
806  588   SEND_VAR_EX/66            ?80       $288                 ?1                  	;0
807  588   DO_FCALL_BY_NAME/131      $289=     ?0                   ?0                  	;0
808  588   ASSIGN/38                 ?245      16?1                 $289                	;0
809  589   GOTO/253                  ?0        ?674                 ?514                	;0
810  591   ECHO/40                   ?0        515:'                                    </tbody>
                                </table>
                            </div>
                        </div> 
                        ' ?0                  	;0
811  593   ECHO/40                   ?0        516:'                    </div> 
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
' ?0                  	;0
812  594   GOTO/253                  ?0        ?1267                ?517                	;0
813  597   INIT_FCALL_BY_NAME/59     ?0        ?0                   518:'b20d33b2749adFec'	;0
814  597   DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
815  597   ASSIGN/38                 ?247      16?4                 $291                	;0
816  598   INIT_FCALL_BY_NAME/59     ?0        ?0                   520:'F93E9343c3D7fD99'	;0
817  598   DO_FCALL_BY_NAME/131      $293=     ?0                   ?0                  	;0
818  598   ASSIGN/38                 ?249      16?2                 $293                	;0
819  600   ASSIGN/38                 $295=     16?27                522:array (
)       	;0
820  600   ASSIGN/38                 ?251      16?30                $295                	;0
821  601   GOTO/253                  ?0        ?845                 ?523                	;0
822  604   ECHO/40                   ?0        524:'		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
823  605   ISSET_ISEMPTY_CV/197      #297=     16?8                 ?0                  	;33554432
824  605   JMPZ_EX/46                #297=     #297                 ?828                	;0	>>828
825  605   FETCH_CONSTANT/99         #298=     ?0                   525:'STATUS_INVALID_FILE'	;16
826  605   IS_EQUAL/17               #299=     16?8                 #298                	;0
827  605   BOOL/52                   #297=     #299                 ?0                  	;0
828  605   JMPZ/43                   ?0        #297                 ?830                	;0	>>830	<<824
829  606   GOTO/253                  ?0        ?371                 ?528                	;0
830  608   ISSET_ISEMPTY_CV/197      #300=     16?8                 ?0                  	;33554432	<<828
831  608   JMPZ_EX/46                #300=     #300                 ?835                	;0	>>835
832  608   FETCH_CONSTANT/99         #301=     ?0                   529:'STATUS_TOO_MANY_RESULTS'	;16
833  608   IS_EQUAL/17               #302=     16?8                 #301                	;0
834  608   BOOL/52                   #300=     #302                 ?0                  	;0
835  608   JMPZ/43                   ?0        #300                 ?837                	;0	>>837	<<831
836  609   GOTO/253                  ?0        ?2                   ?532                	;0
837  611   ISSET_ISEMPTY_CV/197      #303=     16?8                 ?0                  	;33554432	<<835
838  611   JMPZ_EX/46                #303=     #303                 ?842                	;0	>>842
839  611   FETCH_CONSTANT/99         #304=     ?0                   533:'STATUS_NO_SOURCES'	;16
840  611   IS_EQUAL/17               #305=     16?8                 #304                	;0
841  611   BOOL/52                   #303=     #305                 ?0                  	;0
842  611   JMPZ/43                   ?0        #303                 ?844                	;0	>>844	<<838
843  612   GOTO/253                  ?0        ?119                 ?536                	;0
844  614   GOTO/253                  ?0        ?1089                ?537                	;0	<<842
845  616   ASSIGN/38                 ?261      16?40                538:'Review'        	;0
846  617   INCLUDE_OR_EVAL/73        ?262      539:'header.php'     ?0                  	;2
847  618   ECHO/40                   ?0        540:'<div class="wrapper' ?0                  	;0
848  619   ISSET_ISEMPTY_CV/197      #308=     16?0                 ?0                  	;33554432
849  619   JMPZ/43                   ?0        #308                 ?851                	;0	>>851
850  620   GOTO/253                  ?0        ?282                 ?541                	;0
851  622   ECHO/40                   ?0        542:' boxed-layout-ext' ?0                  	;0	<<849
852  623   GOTO/253                  ?0        ?282                 ?543                	;0
853  625   ASSIGN/38                 ?264      16?41                544:array (
)       	;0
854  626   FETCH_STATIC_PROP_R/173   $310=     545:'rRequest'       546:'XUI'           	;0
855  626   FETCH_DIM_R/81            $311=     $310                 548:'category_selection'	;0
856  626   FE_RESET_R/77             $312=     $311                 ?888                	;0
857  626   FE_FETCH_R/78             ?0        $312                 16?19               	;888	>>888	<<887
858  627   INIT_FCALL_BY_NAME/59     ?0        ?0                   549:'in_array'      	;2
859  627   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
860  627   SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
861  627   DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
862  627   BOOL_NOT/13               #314=     $313                 ?0                  	;0
863  627   JMPZ_EX/46                #314=     #314                 ?869                	;0	>>869
864  627   INIT_FCALL_BY_NAME/59     ?0        ?0                   551:'is_numeric'    	;1
865  627   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
866  627   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
867  627   BOOL_NOT/13               #316=     $315                 ?0                  	;0
868  627   BOOL/52                   #314=     #316                 ?0                  	;0
869  627   BOOL_NOT/13               #317=     #314                 ?0                  	;0	<<863
870  627   JMPZ/43                   ?0        #317                 ?873                	;0	>>873
871  628   NOP/0                     ?0        ?0                   ?0                  	;1
872  628   GOTO/253                  ?0        ?887                 ?553                	;0
873  630   INIT_STATIC_METHOD_CALL/113 ?0        554:'API'            556:'Ef92c3ebB0E25473'	;1	<<870
874  630   INIT_FCALL_BY_NAME/59     ?0        ?0                   558:'intval'        	;1
875  630   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
876  630   DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
877  630   FETCH_DIM_R/81            $319=     560:array (
  1 => 'live',
  2 => 'movie',
) $318                	;0
878  630   INIT_ARRAY/71             #320=     $319                 561:'category_type' 	;10
879  630   ADD_ARRAY_ELEMENT/72      #320=     16?19                562:'category_name' 	;0
880  630   SEND_VAL_EX/116           ?80       #320                 ?1                  	;0
881  630   DO_FCALL/60               $321=     ?0                   ?0                  	;0
882  630   ASSIGN/38                 ?277      16?33                $321                	;0
883  631   FETCH_DIM_R/81            $324=     16?33                563:'data'          	;0
884  631   FETCH_DIM_R/81            $325=     $324                 564:'insert_id'     	;0
885  631   ASSIGN_DIM/147            ?278      16?41                16?19               	;0
886  631   OP_DATA/137               ?0        $325                 ?0                  	;0
887  633   JMP/42                    ?0        ?857                 ?0                  	;0	>>857
888  633   FE_FREE/127               ?0        $312                 ?0                  	;0	<<856
889  636   FETCH_STATIC_PROP_R/173   $326=     565:'rRequest'       566:'XUI'           	;0
890  636   FE_RESET_R/77             $327=     $326                 ?1075               	;0
891  636   FE_FETCH_R/78             #328=     $327                 16?22               	;1075	>>1075	<<1074
892  636   ASSIGN/38                 ?284      16?36                #328                	;0
893  637   NOP/0                     ?0        ?0                   ?0                  	;1
894  637   GOTO/253                  ?0        ?895                 ?568                	;0
895  639   INIT_FCALL_BY_NAME/59     ?0        ?0                   569:'substr'        	;3
896  639   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
897  639   SEND_VAL_EX/116           ?96       571:0                ?2                  	;0
898  639   SEND_VAL_EX/116           ?112      572:7                ?3                  	;0
899  639   DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
900  639   IS_EQUAL/17               #331=     $330                 573:'import_'       	;0
901  639   BOOL_NOT/13               #332=     #331                 ?0                  	;0
902  639   JMPZ/43                   ?0        #332                 ?905                	;0	>>905
903  640   NOP/0                     ?0        ?0                   ?0                  	;1
904  640   GOTO/253                  ?0        ?1072                ?574                	;0
905  642   INIT_FCALL_BY_NAME/59     ?0        ?0                   575:'intval'        	;1	<<902
906  642   INIT_FCALL_BY_NAME/59     ?0        ?0                   577:'explode'       	;2
907  642   SEND_VAL_EX/116           ?80       579:'import_'        ?1                  	;0
908  642   SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
909  642   DO_FCALL_BY_NAME/131      $333=     ?0                   ?0                  	;0
910  642   SEPARATE/156              $333=     $333                 ?0                  	;0
911  642   FETCH_DIM_FUNC_ARG/93     $334=     $333                 580:1               	;1
912  642   SEND_VAR_EX/66            ?80       $334                 ?1                  	;0
913  642   DO_FCALL_BY_NAME/131      $335=     ?0                   ?0                  	;0
914  642   ASSIGN/38                 ?291      16?42                $335                	;0
915  643   CONCAT/8                  #338=     584:'import_'        16?42               	;0
916  643   FETCH_STATIC_PROP_R/173   $337=     581:'rRequest'       582:'XUI'           	;0
917  643   FETCH_DIM_R/81            $339=     $337                 #338                	;0
918  643   BOOL_NOT/13               #340=     $339                 ?0                  	;0
919  643   JMPZ/43                   ?0        #340                 ?922                	;0	>>922
920  644   NOP/0                     ?0        ?0                   ?0                  	;1
921  644   GOTO/253                  ?0        ?1072                ?585                	;0
922  646   ASSIGN/38                 ?296      16?20                586:array (
)       	;0	<<919
923  647   INIT_FCALL_BY_NAME/59     ?0        ?0                   587:'json_decode'   	;2
924  647   CONCAT/8                  #343=     592:'category_id_'   16?42               	;0
925  647   FETCH_STATIC_PROP_FUNC_ARG/177 $342=     589:'rRequest'       590:'XUI'           	;1
926  647   FETCH_DIM_FUNC_ARG/93     $344=     $342                 #343                	;1
927  647   SEND_VAR_EX/66            ?80       $344                 ?1                  	;0
928  647   SEND_VAL_EX/116           ?96       593:true             ?2                  	;0
929  647   DO_FCALL_BY_NAME/131      $345=     ?0                   ?0                  	;0
930  647   FE_RESET_R/77             $346=     $345                 ?966                	;0
931  647   FE_FETCH_R/78             ?0        $346                 16?19               	;966	>>966	<<965
932  648   INIT_FCALL_BY_NAME/59     ?0        ?0                   594:'is_numeric'    	;1
933  648   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
934  648   DO_FCALL_BY_NAME/131      $347=     ?0                   ?0                  	;0
935  648   BOOL_NOT/13               #348=     $347                 ?0                  	;0
936  648   JMPZ_EX/46                #348=     #348                 ?939                	;0	>>939
937  648   ISSET_ISEMPTY_DIM_OBJ/115 #349=     16?41                16?19               	;33554432
938  648   BOOL/52                   #348=     #349                 ?0                  	;0
939  648   JMPZ/43                   ?0        #348                 ?943                	;0	>>943	<<936
940  649   NOP/0                     ?0        ?0                   ?0                  	;1
941  649   NOP/0                     ?0        ?0                   ?0                  	;1
942  649   GOTO/253                  ?0        ?959                 ?596                	;0
943  651   INIT_FCALL_BY_NAME/59     ?0        ?0                   597:'is_numeric'    	;1	<<939
944  651   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
945  651   DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
946  651   BOOL_NOT/13               #351=     $350                 ?0                  	;0
947  651   JMPZ/43                   ?0        #351                 ?951                	;0	>>951
948  652   NOP/0                     ?0        ?0                   ?0                  	;1
949  652   NOP/0                     ?0        ?0                   ?0                  	;1
950  652   GOTO/253                  ?0        ?956                 ?599                	;0
951  654   INIT_FCALL_BY_NAME/59     ?0        ?0                   600:'intval'        	;1	<<947
952  654   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
953  654   DO_FCALL_BY_NAME/131      $353=     ?0                   ?0                  	;0
954  654   ASSIGN_DIM/147            ?307      16?20                ?4397406            	;0
955  654   OP_DATA/137               ?0        $353                 ?0                  	;0
956  656   NOP/0                     ?0        ?0                   ?0                  	;1
957  656   NOP/0                     ?0        ?0                   ?0                  	;1
958  656   GOTO/253                  ?0        ?965                 ?602                	;0
959  658   INIT_FCALL_BY_NAME/59     ?0        ?0                   603:'intval'        	;1
960  658   FETCH_DIM_FUNC_ARG/93     $355=     16?41                16?19               	;1
961  658   SEND_VAR_EX/66            ?80       $355                 ?1                  	;0
962  658   DO_FCALL_BY_NAME/131      $356=     ?0                   ?0                  	;0
963  658   ASSIGN_DIM/147            ?309      16?20                ?0                  	;0
964  658   OP_DATA/137               ?0        $356                 ?0                  	;0
965  660   JMP/42                    ?0        ?931                 ?0                  	;0	>>931
966  660   FE_FREE/127               ?0        $346                 ?0                  	;0	<<930
967  662   NOP/0                     ?0        ?0                   ?0                  	;1
968  662   GOTO/253                  ?0        ?969                 ?605                	;0
969  665   IS_EQUAL/17               #357=     16?1                 606:1               	;0
970  665   JMPZ/43                   ?0        #357                 ?973                	;0	>>973
971  666   NOP/0                     ?0        ?0                   ?0                  	;1
972  666   GOTO/253                  ?0        ?1008                ?607                	;0
973  668   CONCAT/8                  #361=     612:'url_'           16?42               	;0	<<970
974  668   FETCH_STATIC_PROP_R/173   $360=     609:'rRequest'       610:'XUI'           	;0
975  668   FETCH_DIM_R/81            $362=     $360                 #361                	;0
976  668   INIT_ARRAY/71             #363=     $362                 ?0                  	;4
977  668   INIT_ARRAY/71             #364=     #363                 613:'stream_source' 	;22
978  668   CONCAT/8                  #366=     617:'name_'          16?42               	;0
979  668   FETCH_STATIC_PROP_R/173   $365=     614:'rRequest'       615:'XUI'           	;0
980  668   FETCH_DIM_R/81            $367=     $365                 #366                	;0
981  668   ADD_ARRAY_ELEMENT/72      #364=     $367                 618:'stream_display_name'	;0
982  668   CONCAT/8                  #369=     622:'tmdb_id_'       16?42               	;0
983  668   FETCH_STATIC_PROP_IS/176  $368=     619:'rRequest'       620:'XUI'           	;0
984  668   ISSET_ISEMPTY_DIM_OBJ/115 #370=     $368                 #369                	;16777216
985  668   BOOL_NOT/13               #371=     #370                 ?0                  	;0
986  668   JMPZ/43                   ?0        #371                 ?992                	;0	>>992
987  668   CONCAT/8                  #373=     626:'tmdb_id_'       16?42               	;0
988  668   FETCH_STATIC_PROP_R/173   $372=     623:'rRequest'       624:'XUI'           	;0
989  668   FETCH_DIM_R/81            $374=     $372                 #373                	;0
990  668   QM_ASSIGN/22              #375=     $374                 ?0                  	;0
991  668   JMP/42                    ?0        ?993                 ?0                  	;0	>>993
992  668   QM_ASSIGN/22              #375=     627:NULL             ?0                  	;0	<<986
993  668   ADD_ARRAY_ELEMENT/72      #364=     #375                 628:'tmdb_id'       	;0	<<991
994  668   INIT_FCALL_BY_NAME/59     ?0        ?0                   629:'json_decode'   	;2
995  668   CONCAT/8                  #377=     634:'bouquets_'      16?42               	;0
996  668   FETCH_STATIC_PROP_FUNC_ARG/177 $376=     631:'rRequest'       632:'XUI'           	;1
997  668   FETCH_DIM_FUNC_ARG/93     $378=     $376                 #377                	;1
998  668   SEND_VAR_EX/66            ?80       $378                 ?1                  	;0
999  668   SEND_VAL_EX/116           ?96       635:true             ?2                  	;0
1000 668   DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
1001 668   ADD_ARRAY_ELEMENT/72      #364=     $379                 636:'bouquets'      	;0
1002 668   ADD_ARRAY_ELEMENT/72      #364=     16?20                637:'category_id'   	;0
1003 668   FETCH_DIM_W/84            $358=     16?17                608:'review'        	;0
1004 668   ASSIGN_DIM/147            ?314      $358                 ?4397406            	;0
1005 668   OP_DATA/137               ?0        #364                 ?0                  	;0
1006 669   NOP/0                     ?0        ?0                   ?0                  	;1
1007 669   GOTO/253                  ?0        ?1072                ?638                	;0
1008 671   NOP/0                     ?0        ?0                   ?0                  	;1
1009 671   GOTO/253                  ?0        ?1010                ?639                	;0
1010 673   CONCAT/8                  #383=     644:'url_'           16?42               	;0
1011 673   FETCH_STATIC_PROP_R/173   $382=     641:'rRequest'       642:'XUI'           	;0
1012 673   FETCH_DIM_R/81            $384=     $382                 #383                	;0
1013 673   INIT_ARRAY/71             #385=     $384                 ?0                  	;4
1014 673   INIT_ARRAY/71             #386=     #385                 645:'stream_source' 	;38
1015 673   CONCAT/8                  #388=     649:'icon_'          16?42               	;0
1016 673   FETCH_STATIC_PROP_R/173   $387=     646:'rRequest'       647:'XUI'           	;0
1017 673   FETCH_DIM_R/81            $389=     $387                 #388                	;0
1018 673   ADD_ARRAY_ELEMENT/72      #386=     $389                 650:'stream_icon'   	;0
1019 673   CONCAT/8                  #391=     654:'name_'          16?42               	;0
1020 673   FETCH_STATIC_PROP_R/173   $390=     651:'rRequest'       652:'XUI'           	;0
1021 673   FETCH_DIM_R/81            $392=     $390                 #391                	;0
1022 673   ADD_ARRAY_ELEMENT/72      #386=     $392                 655:'stream_display_name'	;0
1023 673   ADD_ARRAY_ELEMENT/72      #386=     656:NULL             657:'epg_lang'      	;0
1024 673   CONCAT/8                  #394=     661:'channel_id_'    16?42               	;0
1025 673   FETCH_STATIC_PROP_IS/176  $393=     658:'rRequest'       659:'XUI'           	;0
1026 673   ISSET_ISEMPTY_DIM_OBJ/115 #395=     $393                 #394                	;16777216
1027 673   BOOL_NOT/13               #396=     #395                 ?0                  	;0
1028 673   JMPZ/43                   ?0        #396                 ?1034               	;0	>>1034
1029 673   CONCAT/8                  #398=     665:'channel_id_'    16?42               	;0
1030 673   FETCH_STATIC_PROP_R/173   $397=     662:'rRequest'       663:'XUI'           	;0
1031 673   FETCH_DIM_R/81            $399=     $397                 #398                	;0
1032 673   QM_ASSIGN/22              #400=     $399                 ?0                  	;0
1033 673   JMP/42                    ?0        ?1035                ?0                  	;0	>>1035
1034 673   QM_ASSIGN/22              #400=     666:NULL             ?0                  	;0	<<1028
1035 673   ADD_ARRAY_ELEMENT/72      #386=     #400                 667:'channel_id'    	;0	<<1033
1036 673   CONCAT/8                  #402=     671:'epg_type_'      16?42               	;0
1037 673   FETCH_STATIC_PROP_IS/176  $401=     668:'rRequest'       669:'XUI'           	;0
1038 673   ISSET_ISEMPTY_DIM_OBJ/115 #403=     $401                 #402                	;16777216
1039 673   BOOL_NOT/13               #404=     #403                 ?0                  	;0
1040 673   JMPZ/43                   ?0        #404                 ?1046               	;0	>>1046
1041 673   CONCAT/8                  #406=     675:'epg_type_'      16?42               	;0
1042 673   FETCH_STATIC_PROP_R/173   $405=     672:'rRequest'       673:'XUI'           	;0
1043 673   FETCH_DIM_R/81            $407=     $405                 #406                	;0
1044 673   QM_ASSIGN/22              #408=     $407                 ?0                  	;0
1045 673   JMP/42                    ?0        ?1047                ?0                  	;0	>>1047
1046 673   QM_ASSIGN/22              #408=     676:0                ?0                  	;0	<<1040
1047 673   ADD_ARRAY_ELEMENT/72      #386=     #408                 677:'epg_api'       	;0	<<1045
1048 673   CONCAT/8                  #410=     681:'epg_id_'        16?42               	;0
1049 673   FETCH_STATIC_PROP_IS/176  $409=     678:'rRequest'       679:'XUI'           	;0
1050 673   ISSET_ISEMPTY_DIM_OBJ/115 #411=     $409                 #410                	;16777216
1051 673   BOOL_NOT/13               #412=     #411                 ?0                  	;0
1052 673   JMPZ/43                   ?0        #412                 ?1058               	;0	>>1058
1053 673   CONCAT/8                  #414=     685:'epg_id_'        16?42               	;0
1054 673   FETCH_STATIC_PROP_R/173   $413=     682:'rRequest'       683:'XUI'           	;0
1055 673   FETCH_DIM_R/81            $415=     $413                 #414                	;0
1056 673   QM_ASSIGN/22              #416=     $415                 ?0                  	;0
1057 673   JMP/42                    ?0        ?1059                ?0                  	;0	>>1059
1058 673   QM_ASSIGN/22              #416=     686:0                ?0                  	;0	<<1052
1059 673   ADD_ARRAY_ELEMENT/72      #386=     #416                 687:'epg_id'        	;0	<<1057
1060 673   INIT_FCALL_BY_NAME/59     ?0        ?0                   688:'json_decode'   	;2
1061 673   CONCAT/8                  #418=     693:'bouquets_'      16?42               	;0
1062 673   FETCH_STATIC_PROP_FUNC_ARG/177 $417=     690:'rRequest'       691:'XUI'           	;1
1063 673   FETCH_DIM_FUNC_ARG/93     $419=     $417                 #418                	;1
1064 673   SEND_VAR_EX/66            ?80       $419                 ?1                  	;0
1065 673   SEND_VAL_EX/116           ?96       694:true             ?2                  	;0
1066 673   DO_FCALL_BY_NAME/131      $420=     ?0                   ?0                  	;0
1067 673   ADD_ARRAY_ELEMENT/72      #386=     $420                 695:'bouquets'      	;0
1068 673   ADD_ARRAY_ELEMENT/72      #386=     16?20                696:'category_id'   	;0
1069 673   FETCH_DIM_W/84            $380=     16?17                640:'review'        	;0
1070 673   ASSIGN_DIM/147            ?336      $380                 ?0                  	;0
1071 673   OP_DATA/137               ?0        #386                 ?0                  	;0
1072 678   NOP/0                     ?0        ?0                   ?0                  	;1
1073 678   GOTO/253                  ?0        ?1074                ?697                	;0
1074 679   JMP/42                    ?0        ?891                 ?0                  	;0	>>891
1075 679   FE_FREE/127               ?0        $327                 ?0                  	;0	<<890
1076 682   GOTO/253                  ?0        ?694                 ?698                	;0
1077 686   GOTO/253                  ?0        ?67                  ?699                	;0
1078 688   INIT_FCALL_BY_NAME/59     ?0        ?0                   700:'json_decode'   	;2
1079 688   INIT_FCALL_BY_NAME/59     ?0        ?0                   702:'base64_decode' 	;1
1080 688   FETCH_STATIC_PROP_FUNC_ARG/177 $421=     704:'rRequest'       705:'XUI'           	;1
1081 688   FETCH_DIM_FUNC_ARG/93     $422=     $421                 707:'post_data'     	;1
1082 688   SEND_VAR_EX/66            ?80       $422                 ?1                  	;0
1083 688   DO_FCALL_BY_NAME/131      $423=     ?0                   ?0                  	;0
1084 688   SEND_VAR_NO_REF_EX/50     ?80       $423                 ?1                  	;0
1085 688   SEND_VAL_EX/116           ?96       708:true             ?2                  	;0
1086 688   DO_FCALL_BY_NAME/131      $424=     ?0                   ?0                  	;0
1087 688   ASSIGN/38                 ?380      16?17                $424                	;0
1088 689   GOTO/253                  ?0        ?318                 ?709                	;0
1089 691   JMPZ/43                   ?0        16?0                 ?1091               	;0	>>1091
1090 692   GOTO/253                  ?0        ?118                 ?710                	;0
1091 694   ECHO/40                   ?0        711:'                <div class="alert alert-info" role="alert">
                    The Review page is for playlists of less than 500 items, you should use the normal M3U Import function for larger playlists or reduce the playlist. The review page will cut off at 500 results and not process any more if you upload a larger playlist anyway.
                    ' ?0                  	;0	<<1089
1092 695   IS_EQUAL/17               #426=     16?1                 712:0               	;0
1093 695   BOOL_NOT/13               #427=     #426                 ?0                  	;0
1094 695   JMPZ/43                   ?0        #427                 ?1096               	;0	>>1096
1095 696   GOTO/253                  ?0        ?1097                ?713                	;0
1096 698   ECHO/40                   ?0        714:'                    <br/><br/>If you have an XMLTV EPG file for this playlist, you should add it first and rescan your EPG so channels are automatically matched up against the EPG. You can however do this later through the EPG review tool.
                    ' ?0                  	;0	<<1094
1097 700   GOTO/253                  ?0        ?117                 ?715                	;0
1098 702   ECHO/40                   ?0        16?1                 ?0                  	;0
1099 703   ECHO/40                   ?0        716:'\' />
                        ' ?0                  	;0
1100 704   ASSIGN/38                 ?383      16?23                717:0               	;0
1101 705   FE_RESET_R/77             $429=     16?0                 ?1191               	;0
1102 705   FE_FETCH_R/78             ?0        $429                 16?24               	;1191	>>1191	<<1190
1103 706   NOP/0                     ?0        ?0                   ?0                  	;1
1104 706   GOTO/253                  ?0        ?1105                ?718                	;0
1105 708   POST_INC/36               #430=     16?23                ?0                  	;0
1106 708   FREE/70                   ?0        #430                 ?0                  	;0
1107 709   CONCAT/8                  #431=     719:'<input type="hidden" name="name_' 16?23               	;0
1108 709   CONCAT/8                  #432=     #431                 720:'" id="name_i_' 	;0
1109 709   CONCAT/8                  #433=     #432                 16?23               	;0
1110 709   CONCAT/8                  #434=     #433                 721:'" value="" />' 	;0
1111 709   ECHO/40                   ?0        #434                 ?0                  	;0
1112 710   CONCAT/8                  #435=     722:'<input type="hidden" name="category_id_' 16?23               	;0
1113 710   CONCAT/8                  #436=     #435                 723:'" id="category_id_i_'	;0
1114 710   CONCAT/8                  #437=     #436                 16?23               	;0
1115 710   CONCAT/8                  #438=     #437                 724:'" value="" />' 	;0
1116 710   ECHO/40                   ?0        #438                 ?0                  	;0
1117 711   CONCAT/8                  #439=     725:'<input type="hidden" name="bouquets_' 16?23               	;0
1118 711   CONCAT/8                  #440=     #439                 726:'" id="bouquets_i_'	;0
1119 711   CONCAT/8                  #441=     #440                 16?23               	;0
1120 711   CONCAT/8                  #442=     #441                 727:'" value="" />' 	;0
1121 711   ECHO/40                   ?0        #442                 ?0                  	;0
1122 712   CONCAT/8                  #443=     728:'<input type="hidden" name="icon_' 16?23               	;0
1123 712   CONCAT/8                  #444=     #443                 729:'" id="icon_'   	;0
1124 712   CONCAT/8                  #445=     #444                 16?23               	;0
1125 712   CONCAT/8                  #446=     #445                 730:'" value="'     	;0
1126 712   INIT_FCALL_BY_NAME/59     ?0        ?0                   731:'htmlspecialchars'	;1
1127 712   FETCH_DIM_FUNC_ARG/93     $447=     16?24                733:'logo'          	;1
1128 712   SEND_VAR_EX/66            ?80       $447                 ?1                  	;0
1129 712   DO_FCALL_BY_NAME/131      $448=     ?0                   ?0                  	;0
1130 712   CONCAT/8                  #449=     #446                 $448                	;0
1131 712   CONCAT/8                  #450=     #449                 734:'" />'          	;0
1132 712   ECHO/40                   ?0        #450                 ?0                  	;0
1133 713   NOP/0                     ?0        ?0                   ?0                  	;1
1134 713   GOTO/253                  ?0        ?1163                ?735                	;0
1135 716   CONCAT/8                  #451=     736:'<input type="hidden" id="tvg_id_' 16?23               	;0
1136 716   CONCAT/8                  #452=     #451                 737:'" value="'     	;0
1137 716   INIT_FCALL_BY_NAME/59     ?0        ?0                   738:'htmlspecialchars'	;1
1138 716   FETCH_DIM_FUNC_ARG/93     $453=     16?24                740:'tvg_id'        	;1
1139 716   SEND_VAR_EX/66            ?80       $453                 ?1                  	;0
1140 716   DO_FCALL_BY_NAME/131      $454=     ?0                   ?0                  	;0
1141 716   CONCAT/8                  #455=     #452                 $454                	;0
1142 716   CONCAT/8                  #456=     #455                 741:'" />'          	;0
1143 716   ECHO/40                   ?0        #456                 ?0                  	;0
1144 717   CONCAT/8                  #457=     742:'<input type="hidden" name="epg_type_' 16?23               	;0
1145 717   CONCAT/8                  #458=     #457                 743:'" id="epg_type_'	;0
1146 717   CONCAT/8                  #459=     #458                 16?23               	;0
1147 717   CONCAT/8                  #460=     #459                 744:'" value="0" />'	;0
1148 717   ECHO/40                   ?0        #460                 ?0                  	;0
1149 718   CONCAT/8                  #461=     745:'<input type="hidden" name="epg_id_' 16?23               	;0
1150 718   CONCAT/8                  #462=     #461                 746:'" id="epg_id_' 	;0
1151 718   CONCAT/8                  #463=     #462                 16?23               	;0
1152 718   CONCAT/8                  #464=     #463                 747:'" value="0" />'	;0
1153 718   ECHO/40                   ?0        #464                 ?0                  	;0
1154 719   CONCAT/8                  #465=     748:'<input type="hidden" name="channel_id_' 16?23               	;0
1155 719   CONCAT/8                  #466=     #465                 749:'" id="channel_id_'	;0
1156 719   CONCAT/8                  #467=     #466                 16?23               	;0
1157 719   CONCAT/8                  #468=     #467                 750:'" value="0" />'	;0
1158 719   ECHO/40                   ?0        #468                 ?0                  	;0
1159 720   NOP/0                     ?0        ?0                   ?0                  	;1
1160 720   GOTO/253                  ?0        ?1161                ?751                	;0
1161 724   NOP/0                     ?0        ?0                   ?0                  	;1
1162 724   GOTO/253                  ?0        ?1190                ?752                	;0
1163 726   CONCAT/8                  #469=     753:'<input type="hidden" name="url_' 16?23               	;0
1164 726   CONCAT/8                  #470=     #469                 754:'" value="'     	;0
1165 726   INIT_FCALL_BY_NAME/59     ?0        ?0                   755:'htmlspecialchars'	;1
1166 726   FETCH_DIM_FUNC_ARG/93     $471=     16?24                757:'url'           	;1
1167 726   SEND_VAR_EX/66            ?80       $471                 ?1                  	;0
1168 726   DO_FCALL_BY_NAME/131      $472=     ?0                   ?0                  	;0
1169 726   CONCAT/8                  #473=     #470                 $472                	;0
1170 726   CONCAT/8                  #474=     #473                 758:'" />'          	;0
1171 726   ECHO/40                   ?0        #474                 ?0                  	;0
1172 727   CONCAT/8                  #475=     759:'<input type="hidden" name="import_' 16?23               	;0
1173 727   CONCAT/8                  #476=     #475                 760:'" id="import_' 	;0
1174 727   CONCAT/8                  #477=     #476                 16?23               	;0
1175 727   CONCAT/8                  #478=     #477                 761:'" value="0" />'	;0
1176 727   ECHO/40                   ?0        #478                 ?0                  	;0
1177 728   IS_EQUAL/17               #479=     16?1                 762:1               	;0
1178 728   JMPZ/43                   ?0        #479                 ?1181               	;0	>>1181
1179 729   NOP/0                     ?0        ?0                   ?0                  	;1
1180 729   GOTO/253                  ?0        ?1135                ?763                	;0
1181 731   CONCAT/8                  #480=     764:'<input type="hidden" name="tmdb_id_' 16?23               	;0	<<1178
1182 731   CONCAT/8                  #481=     #480                 765:'" id="tmdb_id_'	;0
1183 731   CONCAT/8                  #482=     #481                 16?23               	;0
1184 731   CONCAT/8                  #483=     #482                 766:'" value="" />' 	;0
1185 731   ECHO/40                   ?0        #483                 ?0                  	;0
1186 732   NOP/0                     ?0        ?0                   ?0                  	;1
1187 732   GOTO/253                  ?0        ?1161                ?767                	;0
1188 733   NOP/0                     ?0        ?0                   ?0                  	;1
1189 733   GOTO/253                  ?0        ?1135                ?768                	;0
1190 734   JMP/42                    ?0        ?1102                ?0                  	;0	>>1102
1191 734   FE_FREE/127               ?0        $429                 ?0                  	;0	<<1101
1192 737   GOTO/253                  ?0        ?97                  ?769                	;0
1193 739   INIT_METHOD_CALL/112      ?0        16?39                770:'get_rows'      	;0
1194 739   DO_FCALL/60               $484=     ?0                   ?0                  	;0
1195 739   FE_RESET_R/77             $485=     $484                 ?1222               	;0
1196 739   FE_FETCH_R/78             ?0        $485                 16?43               	;1222	>>1222	<<1221
1197 740   INIT_FCALL_BY_NAME/59     ?0        ?0                   772:'json_decode'   	;2
1198 740   FETCH_DIM_FUNC_ARG/93     $486=     16?43                774:'stream_source' 	;1
1199 740   SEND_VAR_EX/66            ?80       $486                 ?1                  	;0
1200 740   SEND_VAL_EX/116           ?96       775:true             ?2                  	;0
1201 740   DO_FCALL_BY_NAME/131      $487=     ?0                   ?0                  	;0
1202 740   FE_RESET_R/77             $488=     $487                 ?1220               	;0
1203 740   FE_FETCH_R/78             ?0        $488                 16?12               	;1220	>>1220	<<1219
1204 741   INIT_FCALL_BY_NAME/59     ?0        ?0                   776:'in_array'      	;2
1205 741   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1206 741   SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
1207 741   DO_FCALL_BY_NAME/131      $489=     ?0                   ?0                  	;0
1208 741   JMPZ/43                   ?0        $489                 ?1212               	;0	>>1212
1209 742   NOP/0                     ?0        ?0                   ?0                  	;1
1210 742   NOP/0                     ?0        ?0                   ?0                  	;1
1211 742   GOTO/253                  ?0        ?1219                ?778                	;0
1212 744   INIT_FCALL_BY_NAME/59     ?0        ?0                   779:'str_replace'   	;3	<<1208
1213 744   SEND_VAL_EX/116           ?80       781:'https://'       ?1                  	;0
1214 744   SEND_VAL_EX/116           ?96       782:'http://'        ?2                  	;0
1215 744   SEND_VAR_EX/66            ?112      16?12                ?3                  	;0
1216 744   DO_FCALL_BY_NAME/131      $491=     ?0                   ?0                  	;0
1217 744   ASSIGN_DIM/147            ?445      16?15                ?4397406            	;0
1218 744   OP_DATA/137               ?0        $491                 ?0                  	;0
1219 746   JMP/42                    ?0        ?1203                ?0                  	;0	>>1203
1220 746   FE_FREE/127               ?0        $488                 ?0                  	;0	<<1202
1221 749   JMP/42                    ?0        ?1196                ?0                  	;0	>>1196
1222 749   FE_FREE/127               ?0        $485                 ?0                  	;0	<<1195
1223 752   ASSIGN/38                 ?447      16?44                783:array (
)       	;0
1224 753   FETCH_IS/89               $493=     784:'_FILES'         ?0                  	;0
1225 753   FETCH_DIM_IS/90           $494=     $493                 785:'m3u_file'      	;0
1226 753   ISSET_ISEMPTY_DIM_OBJ/115 #495=     $494                 786:'tmp_name'      	;16777216
1227 753   JMPNZ_EX/47               #495=     #495                 ?1245               	;0	>>1245
1228 753   INIT_FCALL_BY_NAME/59     ?0        ?0                   787:'in_array'      	;2
1229 753   INIT_FCALL_BY_NAME/59     ?0        ?0                   789:'strtolower'    	;1
1230 753   INIT_FCALL_BY_NAME/59     ?0        ?0                   791:'pathinfo'      	;2
1231 753   FETCH_FUNC_ARG/92         $496=     793:'_FILES'         ?0                  	;1
1232 753   FETCH_DIM_FUNC_ARG/93     $497=     $496                 794:'m3u_file'      	;1
1233 753   FETCH_DIM_FUNC_ARG/93     $498=     $497                 795:'name'          	;1
1234 753   SEND_VAR_EX/66            ?80       $498                 ?1                  	;0
1235 753   FETCH_CONSTANT/99         #499=     ?0                   796:'PATHINFO_EXTENSION'	;16
1236 753   SEND_VAL_EX/116           ?96       #499                 ?2                  	;0
1237 753   DO_FCALL_BY_NAME/131      $500=     ?0                   ?0                  	;0
1238 753   SEND_VAR_NO_REF_EX/50     ?80       $500                 ?1                  	;0
1239 753   DO_FCALL_BY_NAME/131      $501=     ?0                   ?0                  	;0
1240 753   SEND_VAR_NO_REF_EX/50     ?80       $501                 ?1                  	;0
1241 753   SEND_VAL_EX/116           ?96       799:array (
  0 => 'm3u',
  1 => 'm3u8',
) ?2                  	;0
1242 753   DO_FCALL_BY_NAME/131      $502=     ?0                   ?0                  	;0
1243 753   BOOL_NOT/13               #503=     $502                 ?0                  	;0
1244 753   BOOL/52                   #495=     #503                 ?0                  	;0
1245 753   JMPZ/43                   ?0        #495                 ?1247               	;0	>>1247	<<1227
1246 754   GOTO/253                  ?0        ?123                 ?800                	;0
1247 756   ASSIGN/38                 ?459      16?0                 801:array (
)       	;0	<<1245
1248 757   GOTO/253                  ?0        ?126                 ?802                	;0
1249 759   FETCH_DIM_R/81            $505=     16?33                803:'status'        	;0
1250 759   ASSIGN/38                 ?461      16?8                 $505                	;0
1251 760   FETCH_CONSTANT/99         #507=     ?0                   804:'STATUS_SUCCESS'	;16
1252 760   IS_EQUAL/17               #508=     16?8                 #507                	;0
1253 760   BOOL_NOT/13               #509=     #508                 ?0                  	;0
1254 760   JMPZ/43                   ?0        #509                 ?1256               	;0	>>1256
1255 761   GOTO/253                  ?0        ?1262                ?807                	;0
1256 763   INIT_FCALL_BY_NAME/59     ?0        ?0                   808:'header'        	;1	<<1254
1257 763   FETCH_CONSTANT/99         #510=     ?0                   810:'STATUS_SUCCESS'	;16
1258 763   CONCAT/8                  #511=     813:'Location: ./streams?status=' #510                	;0
1259 763   SEND_VAL_EX/116           ?80       #511                 ?1                  	;0
1260 763   DO_FCALL_BY_NAME/131      ?467      ?0                   ?0                  	;0
1261 764   EXIT/79                   ?0        ?0                   ?0                  	;0
1262 766   GOTO/253                  ?0        ?67                  ?814                	;0
1263 768   GOTO/253                  ?0        ?1265                ?815                	;0
1264 770   ECHO/40                   ?0        816:'                                            <th class="text-center">Icon</th>
                                            <th>Stream Name</th>
                                            ' ?0                  	;0
1265 772   ECHO/40                   ?0        817:'                                            <th>Category</th>
                                            <th>Bouquets</th>
                                            ' ?0                  	;0
1266 773   GOTO/253                  ?0        ?90                  ?818                	;0
1267 775   INCLUDE_OR_EVAL/73        ?468      819:'footer.php'     ?0                  	;2
1268 776   NOP/0                     ?0        820:1                ?0                  	;4294967295
*/

?>