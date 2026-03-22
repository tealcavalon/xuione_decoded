<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?15                  ?0                  	;0	>>15
1   5    ECHO/40                   ?0        1:' selected'        ?0                  	;0
2   7    ECHO/40                   ?0        2:'>No Filter</option>
                                    <option value="-1"' ?0                  	;0
3   8    FETCH_STATIC_PROP_IS/176  $7=       3:'rRequest'         4:'XUI'             	;0
4   8    ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   6:'filter'          	;33554432
5   8    JMPZ_EX/46                #8=       #8                   ?10                 	;0	>>10
6   8    FETCH_STATIC_PROP_R/173   $9=       7:'rRequest'         8:'XUI'             	;0
7   8    FETCH_DIM_R/81            $10=      $9                   10:'filter'         	;0
8   8    IS_EQUAL/17               #11=      $10                  11:-1               	;0
9   8    BOOL/52                   #8=       #11                  ?0                  	;0
10  8    BOOL_NOT/13               #12=      #8                   ?0                  	;0	<<5
11  8    JMPZ/43                   ?0        #12                  ?13                 	;0	>>13
12  9    GOTO/253                  ?0        ?60                  ?12                 	;0
13  11   ECHO/40                   ?0        13:' selected'       ?0                  	;0	<<11
14  12   GOTO/253                  ?0        ?60                  ?14                 	;0
15  14   INCLUDE_OR_EVAL/73        ?6        15:'session.php'     ?0                  	;2	<<0
16  15   INCLUDE_OR_EVAL/73        ?7        16:'functions.php'   ?0                  	;2
17  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'E6D500e19634d513'	;0
18  16   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
19  16   JMPZ/43                   ?0        $15                  ?21                 	;0	>>21
20  17   GOTO/253                  ?0        ?23                  ?19                 	;0
21  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'E72f42a93714ba87'	;0	<<19
22  19   DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
23  21   GOTO/253                  ?0        ?183                 ?22                 	;0
24  23   FETCH_DIM_R/81            $17=      16?0                 23:'username'       	;0
25  23   ECHO/40                   ?0        $17                  ?0                  	;0
26  24   ECHO/40                   ?0        24:'</option>
                                    ' ?0                  	;0
27  26   ECHO/40                   ?0        25:'                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="reg_filter" class="form-control" data-toggle="select2">
                                    <option value=""' ?0                  	;0
28  27   FETCH_STATIC_PROP_IS/176  $18=      26:'rRequest'        27:'XUI'            	;0
29  27   ISSET_ISEMPTY_DIM_OBJ/115 #19=      $18                  29:'filter'         	;33554432
30  27   JMPZ/43                   ?0        #19                  ?32                 	;0	>>32
31  28   GOTO/253                  ?0        ?2                   ?30                 	;0
32  30   GOTO/253                  ?0        ?1                   ?31                 	;0	<<30
33  33   ECHO/40                   ?0        32:'                                </select>
                            </div>
                        </div>
						<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Username</th>
									<th>Owner</th>
									<th class="text-center">IP</th>
									<th class="text-center">Status</th>
                                    <th class="text-center">Type</th>
									<th class="text-center">Credits</th>
									<th class="text-center">Users</th>
                                    <th class="text-center">Lines</th>
                                    <th class="text-center">MAGs</th>
                                    <th class="text-center">Enigmas</th>
									<th class="text-center">Last Login</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
34  34   GOTO/253                  ?0        ?202                 ?33                 	;0
35  36   ECHO/40                   ?0        34:'" placeholder="Search Users...">
                            </div>
                            <label class="col-md-2 col-form-label text-center" for="reg_reseller">Filter Results &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>
                            <div class="col-md-3">
                                <select id="reg_reseller" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
36  37   FETCH_STATIC_PROP_IS/176  $20=      35:'rRequest'        36:'XUI'            	;0
37  37   ISSET_ISEMPTY_DIM_OBJ/115 #21=      $20                  38:'owner'          	;33554432
38  37   JMPZ_EX/46                #21=      #21                  ?49                 	;0	>>49
39  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'bA89228DC958cE05'	;1
40  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'intval'         	;1
41  37   FETCH_STATIC_PROP_FUNC_ARG/177 $22=      43:'rRequest'        44:'XUI'            	;1
42  37   FETCH_DIM_FUNC_ARG/93     $23=      $22                  46:'owner'          	;1
43  37   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
44  37   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
45  37   SEND_VAR_NO_REF_EX/50     ?80       $24                  ?1                  	;0
46  37   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
47  37   ASSIGN/38                 $26=      16?0                 $25                 	;0
48  37   BOOL/52                   #21=      $26                  ?0                  	;0
49  37   BOOL_NOT/13               #27=      #21                  ?0                  	;0	<<38
50  37   JMPZ/43                   ?0        #27                  ?52                 	;0	>>52
51  38   GOTO/253                  ?0        ?27                  ?47                 	;0
52  40   ECHO/40                   ?0        48:'                                    <option value="' ?0                  	;0	<<50
53  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'intval'         	;1
54  41   FETCH_DIM_FUNC_ARG/93     $28=      16?0                 51:'id'             	;1
55  41   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
56  41   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
57  41   ECHO/40                   ?0        $29                  ?0                  	;0
58  42   ECHO/40                   ?0        52:'" selected="selected">' ?0                  	;0
59  43   GOTO/253                  ?0        ?24                  ?53                 	;0
60  46   ECHO/40                   ?0        54:'>Active</option>
                                    <option value="-2"' ?0                  	;0
61  47   FETCH_STATIC_PROP_IS/176  $30=      55:'rRequest'        56:'XUI'            	;0
62  47   ISSET_ISEMPTY_DIM_OBJ/115 #31=      $30                  58:'filter'         	;33554432
63  47   JMPZ_EX/46                #31=      #31                  ?68                 	;0	>>68
64  47   FETCH_STATIC_PROP_R/173   $32=      59:'rRequest'        60:'XUI'            	;0
65  47   FETCH_DIM_R/81            $33=      $32                  62:'filter'         	;0
66  47   IS_EQUAL/17               #34=      $33                  63:-2               	;0
67  47   BOOL/52                   #31=      #34                  ?0                  	;0
68  47   BOOL_NOT/13               #35=      #31                  ?0                  	;0	<<63
69  47   JMPZ/43                   ?0        #35                  ?71                 	;0	>>71
70  48   GOTO/253                  ?0        ?72                  ?64                 	;0
71  50   ECHO/40                   ?0        65:' selected'       ?0                  	;0	<<69
72  52   GOTO/253                  ?0        ?93                  ?66                 	;0
73  54   ECHO/40                   ?0        67:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    User has been added / modified.
                </div>
                ' ?0                  	;0
74  56   ECHO/40                   ?0        68:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
                        <div id="collapse_filters" class="' ?0                  	;0
75  57   BOOL_NOT/13               #36=      16?1                 ?0                  	;0
76  57   JMPZ/43                   ?0        #36                  ?78                 	;0	>>78
77  58   GOTO/253                  ?0        ?80                  ?69                 	;0
78  60   ECHO/40                   ?0        70:'collapse'        ?0                  	;0	<<76
79  61   GOTO/253                  ?0        ?80                  ?71                 	;0
80  64   ECHO/40                   ?0        72:' form-group row mb-4">
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="reg_search" value="' ?0                  	;0
81  65   FETCH_STATIC_PROP_IS/176  $37=      73:'rRequest'        74:'XUI'            	;0
82  65   ISSET_ISEMPTY_DIM_OBJ/115 #38=      $37                  76:'search'         	;33554432
83  65   BOOL_NOT/13               #39=      #38                  ?0                  	;0
84  65   JMPZ/43                   ?0        #39                  ?86                 	;0	>>86
85  66   GOTO/253                  ?0        ?92                  ?77                 	;0
86  68   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'htmlspecialchars'	;1	<<84
87  68   FETCH_STATIC_PROP_FUNC_ARG/177 $40=      80:'rRequest'        81:'XUI'            	;1
88  68   FETCH_DIM_FUNC_ARG/93     $41=      $40                  83:'search'         	;1
89  68   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
90  68   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
91  68   ECHO/40                   ?0        $42                  ?0                  	;0
92  70   GOTO/253                  ?0        ?35                  ?84                 	;0
93  72   ECHO/40                   ?0        85:'>Disabled</option>
                                    ' ?0                  	;0
94  73   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'AD052A625C6AC011'	;0
95  73   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
96  73   FE_RESET_R/77             $44=      $43                  ?126                	;0
97  73   FE_FETCH_R/78             ?0        $44                  16?2                	;126	>>126	<<125
98  74   ECHO/40                   ?0        88:'                                    <option value="' ?0                  	;0
99  75   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'intval'         	;1
100 75   FETCH_DIM_FUNC_ARG/93     $45=      16?2                 91:'group_id'       	;1
101 75   SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
102 75   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
103 75   ECHO/40                   ?0        $46                  ?0                  	;0
104 76   ECHO/40                   ?0        92:'"'               ?0                  	;0
105 77   FETCH_STATIC_PROP_IS/176  $47=      93:'rRequest'        94:'XUI'            	;0
106 77   ISSET_ISEMPTY_DIM_OBJ/115 #48=      $47                  96:'filter'         	;33554432
107 77   JMPZ_EX/46                #48=      #48                  ?116                	;0	>>116
108 77   FETCH_STATIC_PROP_R/173   $49=      97:'rRequest'        98:'XUI'            	;0
109 77   FETCH_DIM_R/81            $50=      $49                  100:'filter'        	;0
110 77   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'intval'        	;1
111 77   FETCH_DIM_FUNC_ARG/93     $51=      16?2                 103:'group_id'      	;1
112 77   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
113 77   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
114 77   IS_EQUAL/17               #53=      $50                  $52                 	;0
115 77   BOOL/52                   #48=      #53                  ?0                  	;0
116 77   BOOL_NOT/13               #54=      #48                  ?0                  	;0	<<107
117 77   JMPZ/43                   ?0        #54                  ?120                	;0	>>120
118 78   NOP/0                     ?0        ?0                   ?0                  	;1
119 78   GOTO/253                  ?0        ?121                 ?104                	;0
120 80   ECHO/40                   ?0        105:' selected'      ?0                  	;0	<<117
121 82   ECHO/40                   ?0        106:'>'              ?0                  	;0
122 83   FETCH_DIM_R/81            $55=      16?2                 107:'group_name'    	;0
123 83   ECHO/40                   ?0        $55                  ?0                  	;0
124 84   ECHO/40                   ?0        108:'</option>
                                    ' ?0                  	;0
125 85   JMP/42                    ?0        ?97                  ?0                  	;0	>>97
126 85   FE_FREE/127               ?0        $44                  ?0                  	;0	<<96
127 88   ECHO/40                   ?0        109:'                                </select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="reg_show_entries">Show</label>
                            <div class="col-md-1">
                                <select id="reg_show_entries" class="form-control" data-toggle="select2">
                                    ' ?0                  	;0
128 89   FE_RESET_R/77             $56=      110:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?169                	;0
129 89   FE_FETCH_R/78             ?0        $56                  16?3                	;169	>>169	<<168
130 90   NOP/0                     ?0        ?0                   ?0                  	;1
131 90   GOTO/253                  ?0        ?153                 ?111                	;0
132 93   ECHO/40                   ?0        112:' value="'       ?0                  	;0
133 94   ECHO/40                   ?0        16?3                 ?0                  	;0
134 95   ECHO/40                   ?0        113:'">'             ?0                  	;0
135 96   ECHO/40                   ?0        16?3                 ?0                  	;0
136 97   NOP/0                     ?0        ?0                   ?0                  	;1
137 97   GOTO/253                  ?0        ?150                 ?114                	;0
138 99   NOP/0                     ?0        ?0                   ?0                  	;1
139 99   GOTO/253                  ?0        ?132                 ?115                	;0
140 101  FETCH_STATIC_PROP_R/173   $57=      116:'rRequest'       117:'XUI'           	;0
141 101  FETCH_DIM_R/81            $58=      $57                  119:'entries'       	;0
142 101  IS_EQUAL/17               #59=      $58                  16?3                	;0
143 101  BOOL_NOT/13               #60=      #59                  ?0                  	;0
144 101  JMPZ/43                   ?0        #60                  ?147                	;0	>>147
145 102  NOP/0                     ?0        ?0                   ?0                  	;1
146 102  GOTO/253                  ?0        ?148                 ?120                	;0
147 104  ECHO/40                   ?0        121:' selected'      ?0                  	;0	<<144
148 106  NOP/0                     ?0        ?0                   ?0                  	;1
149 106  GOTO/253                  ?0        ?132                 ?122                	;0
150 108  ECHO/40                   ?0        123:'</option>
                                    ' ?0                  	;0
151 110  NOP/0                     ?0        ?0                   ?0                  	;1
152 110  GOTO/253                  ?0        ?168                 ?124                	;0
153 112  ECHO/40                   ?0        125:'                                    <option' ?0                  	;0
154 113  FETCH_STATIC_PROP_IS/176  $61=      126:'rRequest'       127:'XUI'           	;0
155 113  ISSET_ISEMPTY_DIM_OBJ/115 #62=      $61                  129:'entries'       	;33554432
156 113  JMPZ/43                   ?0        #62                  ?159                	;0	>>159
157 114  NOP/0                     ?0        ?0                   ?0                  	;1
158 114  GOTO/253                  ?0        ?140                 ?130                	;0
159 116  FETCH_DIM_R/81            $63=      16?4                 131:'default_entries'	;0	<<156
160 116  IS_EQUAL/17               #64=      $63                  16?3                	;0
161 116  BOOL_NOT/13               #65=      #64                  ?0                  	;0
162 116  JMPZ/43                   ?0        #65                  ?165                	;0	>>165
163 117  NOP/0                     ?0        ?0                   ?0                  	;1
164 117  GOTO/253                  ?0        ?166                 ?132                	;0
165 119  ECHO/40                   ?0        133:' selected'      ?0                  	;0	<<162
166 121  NOP/0                     ?0        ?0                   ?0                  	;1
167 121  GOTO/253                  ?0        ?138                 ?134                	;0
168 122  JMP/42                    ?0        ?129                 ?0                  	;0	>>129
169 122  FE_FREE/127               ?0        $56                  ?0                  	;0	<<128
170 124  GOTO/253                  ?0        ?33                  ?135                	;0
171 127  ECHO/40                   ?0        136:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
172 128  INCLUDE_OR_EVAL/73        ?59       137:'topbar.php'     ?0                  	;2
173 129  ECHO/40                   ?0        138:'					</div>
					<h4 class="page-title">Users</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
174 130  ISSET_ISEMPTY_CV/197      #67=      16?5                 ?0                  	;33554432
175 130  JMPZ_EX/46                #67=      #67                  ?179                	;0	>>179
176 130  FETCH_CONSTANT/99         #68=      ?0                   139:'STATUS_SUCCESS'	;16
177 130  IS_EQUAL/17               #69=      16?5                 #68                 	;0
178 130  BOOL/52                   #67=      #69                  ?0                  	;0
179 130  BOOL_NOT/13               #70=      #67                  ?0                  	;0	<<175
180 130  JMPZ/43                   ?0        #70                  ?182                	;0	>>182
181 131  GOTO/253                  ?0        ?74                  ?142                	;0
182 133  GOTO/253                  ?0        ?73                  ?143                	;0	<<180
183 135  ASSIGN/38                 ?64       16?6                 144:'Users'         	;0
184 136  INCLUDE_OR_EVAL/73        ?65       145:'header.php'     ?0                  	;2
185 137  ECHO/40                   ?0        146:'<div class="wrapper"' ?0                  	;0
186 138  FETCH_IS/89               $73=      147:'_SERVER'        ?0                  	;0
187 138  ISSET_ISEMPTY_DIM_OBJ/115 #74=      $73                  148:'HTTP_X_REQUESTED_WITH'	;16777216
188 138  BOOL_NOT/13               #75=      #74                  ?0                  	;0
189 138  JMPZ_EX/46                #75=      #75                  ?197                	;0	>>197
190 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'strtolower'    	;1
191 138  FETCH_FUNC_ARG/92         $76=      151:'_SERVER'        ?0                  	;1
192 138  FETCH_DIM_FUNC_ARG/93     $77=      $76                  152:'HTTP_X_REQUESTED_WITH'	;1
193 138  SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
194 138  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
195 138  IS_EQUAL/17               #79=      $78                  153:'xmlhttprequest'	;0
196 138  BOOL/52                   #75=      #79                  ?0                  	;0
197 138  BOOL_NOT/13               #80=      #75                  ?0                  	;0	<<189
198 138  JMPZ/43                   ?0        #80                  ?200                	;0	>>200
199 139  GOTO/253                  ?0        ?171                 ?154                	;0
200 141  ECHO/40                   ?0        155:' style="display: none;"' ?0                  	;0	<<198
201 142  GOTO/253                  ?0        ?171                 ?156                	;0
202 144  INCLUDE_OR_EVAL/73        ?74       157:'footer.php'     ?0                  	;2
203 145  NOP/0                     ?0        158:1                ?0                  	;4294967295
*/

?>