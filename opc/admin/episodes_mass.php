<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?94                  ?0                  	;0	>>94
1   5    FETCH_DIM_R/81            $15=      16?0                 1:'servers'         	;0
2   5    ECHO/40                   ?0        $15                  ?0                  	;0
3   6    ECHO/40                   ?0        2:'</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content b-0 mb-0 pt-0">
                                    <div class="tab-pane" id="stream-selection">
                                        <div class="row">
                                            <div class="col-md-2 col-6">
                                                <input type="text" class="form-control" id="stream_search" value="" placeholder="' ?0                  	;0
4   7    FETCH_DIM_R/81            $16=      16?0                 3:'search_episodes' 	;0
5   7    ECHO/40                   ?0        $16                  ?0                  	;0
6   8    ECHO/40                   ?0        4:'...">
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <select id="series_id" class="form-control" data-toggle="select2">
                                                    <option value="">' ?0                  	;0
7   9    FETCH_DIM_R/81            $17=      16?0                 5:'all_series'      	;0
8   9    ECHO/40                   ?0        $17                  ?0                  	;0
9   10   GOTO/253                  ?0        ?123                 ?6                  	;0
10  12   FETCH_DIM_R/81            $18=      16?0                 7:'mass_edit_info'  	;0
11  12   ECHO/40                   ?0        $18                  ?0                  	;0
12  13   ECHO/40                   ?0        8:'                                                </p>
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" class="activate" data-name="serie_name" name="c_serie_name">
                                                        <label></label>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="serie_name">' ?0                  	;0
13  14   FETCH_DIM_R/81            $19=      16?0                 9:'series_name'     	;0
14  14   ECHO/40                   ?0        $19                  ?0                  	;0
15  15   ECHO/40                   ?0        10:'</label>
                                                    <div class="col-md-8">
                                                        <select disabled name="serie_name" id="serie_name" class="form-control" data-toggle="select2">
                                                            ' ?0                  	;0
16  16   FE_RESET_R/77             $20=      16?1                 ?26                 	;0
17  16   FE_FETCH_R/78             ?0        $20                  16?2                	;26	>>26	<<25
18  17   ECHO/40                   ?0        11:'                                                            <option value="' ?0                  	;0
19  18   FETCH_DIM_R/81            $21=      16?2                 12:'id'             	;0
20  18   ECHO/40                   ?0        $21                  ?0                  	;0
21  19   ECHO/40                   ?0        13:'">'              ?0                  	;0
22  20   FETCH_DIM_R/81            $22=      16?2                 14:'title'          	;0
23  20   ECHO/40                   ?0        $22                  ?0                  	;0
24  21   ECHO/40                   ?0        15:'</option>
                                                            ' ?0                  	;0
25  22   JMP/42                    ?0        ?17                  ?0                  	;0	>>17
26  22   FE_FREE/127               ?0        $20                  ?0                  	;0	<<16
27  24   GOTO/253                  ?0        ?187                 ?16                 	;0
28  26   FETCH_DIM_R/81            $23=      16?0                 17:'target_container'	;0
29  26   ECHO/40                   ?0        $23                  ?0                  	;0
30  27   ECHO/40                   ?0        18:'</label>
                                                    <div class="col-md-8">
                                                        <select disabled name="target_container" id="target_container" class="form-control" data-toggle="select2">
                                                            ' ?0                  	;0
31  28   FE_RESET_R/77             $24=      19:array (
  0 => 'mp4',
  1 => 'mkv',
  2 => 'avi',
  3 => 'mpg',
  4 => 'flv',
  5 => '3gp',
  6 => 'm4v',
  7 => 'wmv',
  8 => 'mov',
  9 => 'ts',
) ?39                 	;0
32  28   FE_FETCH_R/78             ?0        $24                  16?3                	;39	>>39	<<38
33  29   ECHO/40                   ?0        20:'                                                            <option value="' ?0                  	;0
34  30   ECHO/40                   ?0        16?3                 ?0                  	;0
35  31   ECHO/40                   ?0        21:'">'              ?0                  	;0
36  32   ECHO/40                   ?0        16?3                 ?0                  	;0
37  33   ECHO/40                   ?0        22:'</option>
                                                            ' ?0                  	;0
38  34   JMP/42                    ?0        ?32                  ?0                  	;0	>>32
39  34   FE_FREE/127               ?0        $24                  ?0                  	;0	<<31
40  37   ECHO/40                   ?0        23:'                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" class="activate" data-name="transcode_profile_id" name="c_transcode_profile_id">
                                                        <label></label>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="transcode_profile_id">' ?0                  	;0
41  38   GOTO/253                  ?0        ?103                 ?24                 	;0
42  41   ECHO/40                   ?0        25:'                                                </select>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <select id="filter" class="form-control" data-toggle="select2">
                                                    <option value="" selected>' ?0                  	;0
43  42   FETCH_DIM_R/81            $25=      16?0                 26:'no_filter'      	;0
44  42   ECHO/40                   ?0        $25                  ?0                  	;0
45  43   ECHO/40                   ?0        27:'</option>
                                                    <option value="1">' ?0                  	;0
46  44   FETCH_DIM_R/81            $26=      16?0                 28:'encoded'        	;0
47  44   ECHO/40                   ?0        $26                  ?0                  	;0
48  45   GOTO/253                  ?0        ?240                 ?29                 	;0
49  47   ECHO/40                   ?0        30:'                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            <input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />
                            <input type="hidden" name="streams" id="streams" value="" />
                            <div id="basicwizard">
                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                    <li class="nav-item">
                                        <a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                            <i class="mdi mdi-play mr-1"></i>
                                            <span class="d-none d-sm-inline">' ?0                  	;0
50  48   FETCH_DIM_R/81            $27=      16?0                 31:'episodes'       	;0
51  48   ECHO/40                   ?0        $27                  ?0                  	;0
52  49   ECHO/40                   ?0        32:'</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                            <i class="mdi mdi-account-card-details-outline mr-1"></i>
                                            <span class="d-none d-sm-inline">' ?0                  	;0
53  50   FETCH_DIM_R/81            $28=      16?0                 33:'details'        	;0
54  50   ECHO/40                   ?0        $28                  ?0                  	;0
55  51   ECHO/40                   ?0        34:'</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-server-network mr-1"></i>
                                            <span class="d-none d-sm-inline">' ?0                  	;0
56  52   GOTO/253                  ?0        ?1                   ?35                 	;0
57  54   ECHO/40                   ?0        36:'</th>
                                                        <th>' ?0                  	;0
58  55   FETCH_DIM_R/81            $29=      16?0                 37:'server'         	;0
59  55   ECHO/40                   ?0        $29                  ?0                  	;0
60  56   ECHO/40                   ?0        38:'</th>
                                                        <th class="text-center">' ?0                  	;0
61  57   FETCH_DIM_R/81            $30=      16?0                 39:'status'         	;0
62  57   ECHO/40                   ?0        $30                  ?0                  	;0
63  58   ECHO/40                   ?0        40:'</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="stream-details">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="sub-header">
                                                    ' ?0                  	;0
64  59   GOTO/253                  ?0        ?10                  ?41                 	;0
65  61   ECHO/40                   ?0        42:'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
66  62   INCLUDE_OR_EVAL/73        ?16       43:'topbar.php'      ?0                  	;2
67  63   ECHO/40                   ?0        44:'					</div>
                    <h4 class="page-title">' ?0                  	;0
68  64   FETCH_DIM_R/81            $32=      16?0                 45:'mass_edit_episodes'	;0
69  64   ECHO/40                   ?0        $32                  ?0                  	;0
70  65   ECHO/40                   ?0        46:' <small id="selected_count"></small></h4>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="col-xl-12">
                ' ?0                  	;0
71  66   GOTO/253                  ?0        ?227                 ?47                 	;0
72  68   ECHO/40                   ?0        48:'</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="load-balancing">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" data-name="server_tree" class="activate" name="c_server_tree" id="c_server_tree">
                                                        <label></label>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="server_tree">' ?0                  	;0
73  69   FETCH_DIM_R/81            $33=      16?0                 49:'server_tree'    	;0
74  69   ECHO/40                   ?0        $33                  ?0                  	;0
75  70   ECHO/40                   ?0        50:'</label>
                                                    <div class="col-md-8">
                                                        <div id="server_tree"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="server_type">Server Type</label>
                                                    <div class="col-md-2">
                                                        <select disabled name="server_type" id="server_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
76  71   FE_RESET_R/77             $34=      51:array (
  'SET' => 'SET SERVERS',
  'ADD' => 'ADD SELECTED',
  'DEL' => 'DELETE SELECTED',
) ?85                 	;0
77  71   FE_FETCH_R/78             #35=      $34                  16?4                	;85	>>85	<<84
78  71   ASSIGN/38                 ?21       16?5                 #35                 	;0
79  72   ECHO/40                   ?0        52:'															<option value="' ?0                  	;0
80  73   ECHO/40                   ?0        16?5                 ?0                  	;0
81  74   ECHO/40                   ?0        53:'">'              ?0                  	;0
82  75   ECHO/40                   ?0        16?4                 ?0                  	;0
83  76   ECHO/40                   ?0        54:'</option>
															' ?0                  	;0
84  77   JMP/42                    ?0        ?77                  ?0                  	;0	>>77
85  77   FE_FREE/127               ?0        $34                  ?0                  	;0	<<76
86  80   GOTO/253                  ?0        ?179                 ?55                 	;0
87  83   ECHO/40                   ?0        56:'                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                                        <ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
                                                <a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
88  84   FETCH_DIM_R/81            $37=      16?0                 57:'prev'           	;0
89  84   ECHO/40                   ?0        $37                  ?0                  	;0
90  85   ECHO/40                   ?0        58:'</a>
                                            </li>
                                            <li class="nextb list-inline-item float-right">
                                                <a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
91  86   FETCH_DIM_R/81            $38=      16?0                 59:'next'           	;0
92  86   ECHO/40                   ?0        $38                  ?0                  	;0
93  87   GOTO/253                  ?0        ?72                  ?60                 	;0
94  89   INCLUDE_OR_EVAL/73        ?24       61:'session.php'     ?0                  	;2	<<0
95  90   INCLUDE_OR_EVAL/73        ?25       62:'functions.php'   ?0                  	;2
96  91   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'E6d500e19634D513'	;0
97  91   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
98  91   JMPZ/43                   ?0        $41                  ?100                	;0	>>100
99  92   GOTO/253                  ?0        ?102                 ?65                 	;0
100 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'e72f42A93714BA87'	;0	<<98
101 94   DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
102 96   GOTO/253                  ?0        ?153                 ?68                 	;0
103 98   FETCH_DIM_R/81            $43=      16?0                 69:'transcoding_profile'	;0
104 98   ECHO/40                   ?0        $43                  ?0                  	;0
105 99   ECHO/40                   ?0        70:'</label>
                                                    <div class="col-md-8">
                                                        <select name="transcode_profile_id" disabled id="transcode_profile_id" class="form-control" data-toggle="select2">
                                                            <option selected value="0">' ?0                  	;0
106 100  FETCH_DIM_R/81            $44=      16?0                 71:'transcoding_disabled'	;0
107 100  ECHO/40                   ?0        $44                  ?0                  	;0
108 101  ECHO/40                   ?0        72:'</option>
                                                            ' ?0                  	;0
109 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'F93e9343c3d7FD99'	;0
110 102  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
111 102  FE_RESET_R/77             $46=      $45                  ?121                	;0
112 102  FE_FETCH_R/78             ?0        $46                  16?6                	;121	>>121	<<120
113 103  ECHO/40                   ?0        75:'                                                            <option value="' ?0                  	;0
114 104  FETCH_DIM_R/81            $47=      16?6                 76:'profile_id'     	;0
115 104  ECHO/40                   ?0        $47                  ?0                  	;0
116 105  ECHO/40                   ?0        77:'">'              ?0                  	;0
117 106  FETCH_DIM_R/81            $48=      16?6                 78:'profile_name'   	;0
118 106  ECHO/40                   ?0        $48                  ?0                  	;0
119 107  ECHO/40                   ?0        79:'</option>
                                                            ' ?0                  	;0
120 108  JMP/42                    ?0        ?112                 ?0                  	;0	>>112
121 108  FE_FREE/127               ?0        $46                  ?0                  	;0	<<111
122 110  GOTO/253                  ?0        ?87                  ?80                 	;0
123 112  ECHO/40                   ?0        81:'</option>
                                                    ' ?0                  	;0
124 113  FE_RESET_R/77             $49=      16?1                 ?134                	;0
125 113  FE_FETCH_R/78             ?0        $49                  16?7                	;134	>>134	<<133
126 114  ECHO/40                   ?0        82:'                                                    <option value="' ?0                  	;0
127 115  FETCH_DIM_R/81            $50=      16?7                 83:'id'             	;0
128 115  ECHO/40                   ?0        $50                  ?0                  	;0
129 116  ECHO/40                   ?0        84:'">'              ?0                  	;0
130 117  FETCH_DIM_R/81            $51=      16?7                 85:'title'          	;0
131 117  ECHO/40                   ?0        $51                  ?0                  	;0
132 118  ECHO/40                   ?0        86:'</option>
                                                    ' ?0                  	;0
133 119  JMP/42                    ?0        ?125                 ?0                  	;0	>>125
134 119  FE_FREE/127               ?0        $49                  ?0                  	;0	<<124
135 122  ECHO/40                   ?0        87:'                                                </select>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <select id="episode_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
136 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'c6a90bFCd425Eb63'	;0
137 123  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
138 123  FE_RESET_R/77             $53=      $52                  ?151                	;0
139 123  FE_FETCH_R/78             ?0        $53                  16?8                	;151	>>151	<<150
140 124  ECHO/40                   ?0        90:'                                                    <option value="' ?0                  	;0
141 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'intval'         	;1
142 125  FETCH_DIM_FUNC_ARG/93     $54=      16?8                 93:'id'             	;1
143 125  SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
144 125  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
145 125  ECHO/40                   ?0        $55                  ?0                  	;0
146 126  ECHO/40                   ?0        94:'">'              ?0                  	;0
147 127  FETCH_DIM_R/81            $56=      16?8                 95:'server_name'    	;0
148 127  ECHO/40                   ?0        $56                  ?0                  	;0
149 128  ECHO/40                   ?0        96:'</option>
                                                    ' ?0                  	;0
150 129  JMP/42                    ?0        ?139                 ?0                  	;0	>>139
151 129  FE_FREE/127               ?0        $53                  ?0                  	;0	<<138
152 131  GOTO/253                  ?0        ?42                  ?97                 	;0
153 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'F5E03449e4b2215c'	;0
154 133  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
155 133  ASSIGN/38                 ?43       16?1                 $57                 	;0
156 134  ASSIGN/38                 ?44       16?9                 100:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Active</strong>',
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
)	;0
157 135  FE_RESET_R/77             $60=      16?10                ?169                	;0
158 135  FE_FETCH_R/78             ?0        $60                  16?8                	;169	>>169	<<168
159 136  FETCH_DIM_R/81            $62=      16?8                 101:'id'            	;0
160 136  INIT_ARRAY/71             #63=      $62                  102:'id'            	;22
161 136  ADD_ARRAY_ELEMENT/72      #63=      103:'offline'        104:'parent'        	;0
162 136  FETCH_DIM_R/81            $64=      16?8                 105:'server_name'   	;0
163 136  ADD_ARRAY_ELEMENT/72      #63=      $64                  106:'text'          	;0
164 136  ADD_ARRAY_ELEMENT/72      #63=      107:'mdi mdi-server-network' 108:'icon'          	;0
165 136  ADD_ARRAY_ELEMENT/72      #63=      109:array (
  'opened' => true,
) 110:'state'         	;0
166 136  ASSIGN_DIM/147            ?46       16?9                 ?4386466            	;0
167 136  OP_DATA/137               ?0        #63                  ?0                  	;0
168 137  JMP/42                    ?0        ?158                 ?0                  	;0	>>158
169 137  FE_FREE/127               ?0        $60                  ?0                  	;0	<<157
170 140  ASSIGN/38                 ?50       16?11                111:'Mass Edit Episodes'	;0
171 141  GOTO/253                  ?0        ?209                 ?112                	;0
172 143  FETCH_DIM_R/81            $66=      16?0                 113:'prev'          	;0
173 143  ECHO/40                   ?0        $66                  ?0                  	;0
174 144  ECHO/40                   ?0        114:'</a>
                                            </li>
                                            <li class="nextb list-inline-item float-right">
                                                <input name="submit_stream" type="submit" class="btn btn-primary" value="' ?0                  	;0
175 145  FETCH_DIM_R/81            $67=      16?0                 115:'edit_episodes' 	;0
176 145  ECHO/40                   ?0        $67                  ?0                  	;0
177 146  ECHO/40                   ?0        116:'" />
                                            </li>
                                        </ul>
                                    </div>
                                </div> 
                            </div> 
                        </form>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</div>
' ?0                  	;0
178 147  GOTO/253                  ?0        ?272                 ?117                	;0
179 149  ECHO/40                   ?0        118:'														</select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-3 col-form-label" for="reencode_on_edit">' ?0                  	;0
180 150  FETCH_DIM_R/81            $68=      16?0                 119:'reencode_on_edit'	;0
181 150  ECHO/40                   ?0        $68                  ?0                  	;0
182 151  ECHO/40                   ?0        120:'</label>
                                                    <div class="col-md-2">
                                                        <input name="reencode_on_edit" id="reencode_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-3 col-form-label" for="reprocess_tmdb">' ?0                  	;0
183 152  FETCH_DIM_R/81            $69=      16?0                 121:'reprocess_tmdb_data'	;0
184 152  ECHO/40                   ?0        $69                  ?0                  	;0
185 153  ECHO/40                   ?0        122:'</label>
                                                    <div class="col-md-2">
                                                        <input name="reprocess_tmdb" id="reprocess_tmdb" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                                        <ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
                                                <a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
186 154  GOTO/253                  ?0        ?172                 ?123                	;0
187 157  ECHO/40                   ?0        124:'                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" class="activate" data-name="direct_source" data-type="switch" name="c_direct_source">
                                                        <label></label>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="direct_source">' ?0                  	;0
188 158  FETCH_DIM_R/81            $70=      16?0                 125:'direct_source' 	;0
189 158  ECHO/40                   ?0        $70                  ?0                  	;0
190 159  ECHO/40                   ?0        126:'</label>
                                                    <div class="col-md-2">
                                                        <input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="direct_proxy">Direct Stream</label>
													<div class="col-md-2">
														<input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="direct_proxy" data-type="switch" name="c_direct_proxy">
														<label></label>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" class="activate" data-name="movie_symlink" data-type="switch" name="c_movie_symlink">
                                                        <label></label>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="movie_symlink">' ?0                  	;0
191 160  FETCH_DIM_R/81            $71=      16?0                 127:'create_symlink'	;0
192 160  ECHO/40                   ?0        $71                  ?0                  	;0
193 161  GOTO/253                  ?0        ?201                 ?128                	;0
194 164  ECHO/40                   ?0        129:'                                                </select>
                                            </div>
                                            <div class="col-md-1 col-6">
                                                <button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">
                                                    <i class="mdi mdi-selection"></i>
                                                </button>
                                            </div>
                                            <table id="datatable-mass" class="table table-borderless mb-0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th class="text-center">' ?0                  	;0
195 165  FETCH_DIM_R/81            $72=      16?0                 130:'id'            	;0
196 165  ECHO/40                   ?0        $72                  ?0                  	;0
197 166  ECHO/40                   ?0        131:'</th>
                                                        <th class="text-center">Image</th>
                                                        <th>' ?0                  	;0
198 167  FETCH_DIM_R/81            $73=      16?0                 132:'name'          	;0
199 167  ECHO/40                   ?0        $73                  ?0                  	;0
200 168  GOTO/253                  ?0        ?57                  ?133                	;0
201 170  ECHO/40                   ?0        134:'</label>
                                                    <div class="col-md-2">
                                                        <input name="movie_symlink" id="movie_symlink" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="remove_subtitles">' ?0                  	;0
202 171  FETCH_DIM_R/81            $74=      16?0                 135:'remove_subtitles'	;0
203 171  ECHO/40                   ?0        $74                  ?0                  	;0
204 172  ECHO/40                   ?0        136:'</label>
                                                    <div class="col-md-2">
                                                        <input name="remove_subtitles" id="remove_subtitles" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                    </div>
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" class="activate" data-name="remove_subtitles" data-type="switch" name="c_remove_subtitles">
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" class="activate" data-name="read_native" data-type="switch" name="c_read_native">
                                                        <label></label>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="read_native">' ?0                  	;0
205 173  FETCH_DIM_R/81            $75=      16?0                 137:'native_frames' 	;0
206 173  ECHO/40                   ?0        $75                  ?0                  	;0
207 174  ECHO/40                   ?0        138:'</label>
                                                    <div class="col-md-2">
                                                        <input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
                                                        <input type="checkbox" class="activate" data-name="target_container" name="c_target_container">
                                                        <label></label>
                                                    </div>
                                                    <label class="col-md-3 col-form-label" for="target_container">' ?0                  	;0
208 175  GOTO/253                  ?0        ?28                  ?139                	;0
209 177  INCLUDE_OR_EVAL/73        ?61       140:'header.php'     ?0                  	;2
210 178  ECHO/40                   ?0        141:'<div class="wrapper boxed-layout-xl"' ?0                  	;0
211 179  FETCH_IS/89               $77=      142:'_SERVER'        ?0                  	;0
212 179  ISSET_ISEMPTY_DIM_OBJ/115 #78=      $77                  143:'HTTP_X_REQUESTED_WITH'	;16777216
213 179  BOOL_NOT/13               #79=      #78                  ?0                  	;0
214 179  JMPZ_EX/46                #79=      #79                  ?222                	;0	>>222
215 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'strtolower'    	;1
216 179  FETCH_FUNC_ARG/92         $80=      146:'_SERVER'        ?0                  	;1
217 179  FETCH_DIM_FUNC_ARG/93     $81=      $80                  147:'HTTP_X_REQUESTED_WITH'	;1
218 179  SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
219 179  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
220 179  IS_EQUAL/17               #83=      $82                  148:'xmlhttprequest'	;0
221 179  BOOL/52                   #79=      #83                  ?0                  	;0
222 179  BOOL_NOT/13               #84=      #79                  ?0                  	;0	<<214
223 179  JMPZ/43                   ?0        #84                  ?225                	;0	>>225
224 180  GOTO/253                  ?0        ?226                 ?149                	;0
225 182  ECHO/40                   ?0        150:' style="display: none;"' ?0                  	;0	<<223
226 184  GOTO/253                  ?0        ?65                  ?151                	;0
227 186  ISSET_ISEMPTY_CV/197      #85=      16?12                ?0                  	;33554432
228 186  JMPZ_EX/46                #85=      #85                  ?232                	;0	>>232
229 186  FETCH_CONSTANT/99         #86=      ?0                   152:'STATUS_SUCCESS'	;16
230 186  IS_EQUAL/17               #87=      16?12                #86                 	;0
231 186  BOOL/52                   #85=      #87                  ?0                  	;0
232 186  BOOL_NOT/13               #88=      #85                  ?0                  	;0	<<228
233 186  JMPZ/43                   ?0        #88                  ?235                	;0	>>235
234 187  GOTO/253                  ?0        ?239                 ?155                	;0
235 189  ECHO/40                   ?0        156:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    ' ?0                  	;0	<<233
236 190  FETCH_DIM_R/81            $89=      16?0                 157:'mass_edit_episodes_success'	;0
237 190  ECHO/40                   ?0        $89                  ?0                  	;0
238 191  ECHO/40                   ?0        158:'                </div>
                ' ?0                  	;0
239 193  GOTO/253                  ?0        ?49                  ?159                	;0
240 195  ECHO/40                   ?0        160:'</option>
                                                    <option value="2">' ?0                  	;0
241 196  FETCH_DIM_R/81            $90=      16?0                 161:'encoding'      	;0
242 196  ECHO/40                   ?0        $90                  ?0                  	;0
243 197  ECHO/40                   ?0        162:'</option>
                                                    <option value="3">' ?0                  	;0
244 198  FETCH_DIM_R/81            $91=      16?0                 163:'down'          	;0
245 198  ECHO/40                   ?0        $91                  ?0                  	;0
246 199  ECHO/40                   ?0        164:'</option>
                                                    <option value="4">' ?0                  	;0
247 200  GOTO/253                  ?0        ?248                 ?165                	;0
248 202  FETCH_DIM_R/81            $92=      16?0                 166:'ready'         	;0
249 202  ECHO/40                   ?0        $92                  ?0                  	;0
250 203  ECHO/40                   ?0        167:'</option>
                                                    <option value="5">' ?0                  	;0
251 204  FETCH_DIM_R/81            $93=      16?0                 168:'direct'        	;0
252 204  ECHO/40                   ?0        $93                  ?0                  	;0
253 205  ECHO/40                   ?0        169:'</option>
                                                    <option value="7">Transcoding</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1 col-6">
                                                <select id="show_entries" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
254 206  FE_RESET_R/77             $94=      170:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?270                	;0
255 206  FE_FETCH_R/78             ?0        $94                  16?13               	;270	>>270	<<269
256 207  ECHO/40                   ?0        171:'                                                    <option' ?0                  	;0
257 208  FETCH_DIM_R/81            $95=      16?14                172:'default_entries'	;0
258 208  IS_EQUAL/17               #96=      $95                  16?13               	;0
259 208  BOOL_NOT/13               #97=      #96                  ?0                  	;0
260 208  JMPZ/43                   ?0        #97                  ?263                	;0	>>263
261 209  NOP/0                     ?0        ?0                   ?0                  	;1
262 209  GOTO/253                  ?0        ?264                 ?173                	;0
263 211  ECHO/40                   ?0        174:' selected'      ?0                  	;0	<<260
264 213  ECHO/40                   ?0        175:' value="'       ?0                  	;0
265 214  ECHO/40                   ?0        16?13                ?0                  	;0
266 215  ECHO/40                   ?0        176:'">'             ?0                  	;0
267 216  ECHO/40                   ?0        16?13                ?0                  	;0
268 217  ECHO/40                   ?0        177:'</option>
                                                    ' ?0                  	;0
269 218  JMP/42                    ?0        ?255                 ?0                  	;0	>>255
270 218  FE_FREE/127               ?0        $94                  ?0                  	;0	<<254
271 220  GOTO/253                  ?0        ?194                 ?178                	;0
272 222  INCLUDE_OR_EVAL/73        ?83       179:'footer.php'     ?0                  	;2
273 223  NOP/0                     ?0        180:1                ?0                  	;4294967295
*/

?>