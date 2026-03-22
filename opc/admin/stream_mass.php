<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?57                  ?0                  	;0	>>57
1   5    ECHO/40                   ?0        1:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="time_to_restart">Time to Restart</label>
													<div class="col-md-8">
														<div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
															<input disabled id="time_to_restart" name="time_to_restart" type="text" class="form-control" value="' ?0                  	;0
2   6    FETCH_DIM_R/81            $18=      16?0                 2:'at'              	;0
3   6    ECHO/40                   ?0        $18                  ?0                  	;0
4   7    ECHO/40                   ?0        3:'">
															<div class="input-group-append">
																<span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
															</div>
														</div>
													</div>
												</div>
											</div> 
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
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" data-name="server_tree" class="activate" name="c_server_tree" id="c_server_tree">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="server_tree">Server Tree</label>
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
5   8    FE_RESET_R/77             $19=      4:array (
  'SET' => 'SET SERVERS',
  'ADD' => 'ADD SELECTED',
  'DEL' => 'DELETE SELECTED',
) ?14                 	;0
6   8    FE_FETCH_R/78             #20=      $19                  16?1                	;14	>>14	<<13
7   8    ASSIGN/38                 ?3        16?2                 #20                 	;0
8   9    ECHO/40                   ?0        5:'															<option value="' ?0                  	;0
9   10   ECHO/40                   ?0        16?2                 ?0                  	;0
10  11   ECHO/40                   ?0        6:'">'               ?0                  	;0
11  12   ECHO/40                   ?0        16?1                 ?0                  	;0
12  13   ECHO/40                   ?0        7:'</option>
															' ?0                  	;0
13  14   JMP/42                    ?0        ?6                   ?0                  	;0	>>6
14  14   FE_FREE/127               ?0        $19                  ?0                  	;0	<<5
15  17   GOTO/253                  ?0        ?78                  ?8                  	;0
16  19   ECHO/40                   ?0        9:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="headers" name="c_headers">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="headers">Headers</label>
													<div class="col-md-8">
														<input type="text" disabled class="form-control" id="headers" name="headers" value="' ?0                  	;0
17  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'htmlspecialchars'	;1
18  20   FETCH_DIM_FUNC_ARG/93     $22=      16?3                 12:'headers'        	;1
19  20   FETCH_DIM_FUNC_ARG/93     $23=      $22                  13:'argument_default_value'	;1
20  20   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
21  20   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
22  20   ECHO/40                   ?0        $24                  ?0                  	;0
23  21   ECHO/40                   ?0        14:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="transcode_profile_id" name="c_transcode_profile_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile</label>
													<div class="col-md-8">
														<select name="transcode_profile_id" disabled id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option selected value="0">Transcoding Disabled</option>
															' ?0                  	;0
24  22   FE_RESET_R/77             $25=      16?4                 ?37                 	;0
25  22   FE_FETCH_R/78             ?0        $25                  16?5                	;37	>>37	<<36
26  23   ECHO/40                   ?0        15:'															<option value="' ?0                  	;0
27  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'intval'         	;1
28  24   FETCH_DIM_FUNC_ARG/93     $26=      16?5                 18:'profile_id'     	;1
29  24   SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
30  24   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
31  24   ECHO/40                   ?0        $27                  ?0                  	;0
32  25   ECHO/40                   ?0        19:'">'              ?0                  	;0
33  26   FETCH_DIM_R/81            $28=      16?5                 20:'profile_name'   	;0
34  26   ECHO/40                   ?0        $28                  ?0                  	;0
35  27   ECHO/40                   ?0        21:'</option>
															' ?0                  	;0
36  28   JMP/42                    ?0        ?25                  ?0                  	;0	>>25
37  28   FE_FREE/127               ?0        $25                  ?0                  	;0	<<24
38  31   GOTO/253                  ?0        ?290                 ?22                 	;0
39  34   ASSIGN/38                 ?11       16?6                 23:'Mass Edit Streams'	;0
40  35   INCLUDE_OR_EVAL/73        ?12       24:'header.php'      ?0                  	;2
41  36   ECHO/40                   ?0        25:'<div class="wrapper boxed-layout-xl"' ?0                  	;0
42  37   FETCH_IS/89               $31=      26:'_SERVER'         ?0                  	;0
43  37   ISSET_ISEMPTY_DIM_OBJ/115 #32=      $31                  27:'HTTP_X_REQUESTED_WITH'	;16777216
44  37   BOOL_NOT/13               #33=      #32                  ?0                  	;0
45  37   JMPZ_EX/46                #33=      #33                  ?53                 	;0	>>53
46  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'strtolower'     	;1
47  37   FETCH_FUNC_ARG/92         $34=      30:'_SERVER'         ?0                  	;1
48  37   FETCH_DIM_FUNC_ARG/93     $35=      $34                  31:'HTTP_X_REQUESTED_WITH'	;1
49  37   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
50  37   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
51  37   IS_EQUAL/17               #37=      $36                  32:'xmlhttprequest' 	;0
52  37   BOOL/52                   #33=      #37                  ?0                  	;0
53  37   BOOL_NOT/13               #38=      #33                  ?0                  	;0	<<45
54  37   JMPZ/43                   ?0        #38                  ?56                 	;0	>>56
55  38   GOTO/253                  ?0        ?335                 ?33                 	;0
56  40   GOTO/253                  ?0        ?334                 ?34                 	;0	<<54
57  42   INCLUDE_OR_EVAL/73        ?21       35:'session.php'     ?0                  	;2	<<0
58  43   INCLUDE_OR_EVAL/73        ?22       36:'functions.php'   ?0                  	;2
59  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'E6d500E19634D513'	;0
60  44   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
61  44   JMPZ/43                   ?0        $41                  ?63                 	;0	>>63
62  45   GOTO/253                  ?0        ?65                  ?39                 	;0
63  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'E72F42A93714Ba87'	;0	<<61
64  47   DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
65  49   GOTO/253                  ?0        ?238                 ?42                 	;0
66  51   FE_RESET_R/77             $43=      43:array (
  0 => 'Disabled',
  1 => 'FFMPEG',
  2 => 'PHP',
) ?75                 	;0
67  51   FE_FETCH_R/78             #44=      $43                  16?7                	;75	>>75	<<74
68  51   ASSIGN/38                 ?27       16?2                 #44                 	;0
69  52   ECHO/40                   ?0        44:'															<option value="' ?0                  	;0
70  53   ECHO/40                   ?0        16?2                 ?0                  	;0
71  54   ECHO/40                   ?0        45:'">'              ?0                  	;0
72  55   ECHO/40                   ?0        16?7                 ?0                  	;0
73  56   ECHO/40                   ?0        46:'</option>
															' ?0                  	;0
74  57   JMP/42                    ?0        ?67                  ?0                  	;0	>>67
75  57   FE_FREE/127               ?0        $43                  ?0                  	;0	<<66
76  60   ECHO/40                   ?0        47:'														</select>
													</div>
                                                    <label class="col-md-3 col-form-label" for="tv_archive_duration">Timeshift Days</label>
													<div class="col-md-2">
														<input disabled type="text" class="form-control text-center" id="tv_archive_duration" name="tv_archive_duration" value="0" />
													</div>
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="tv_archive_duration" name="c_tv_archive_duration">
														<label></label>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-3 col-form-label" for="restart_on_edit">Restart on Edit</label>
													<div class="col-md-2">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
													</div>
                                                </div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<input name="submit_stream" type="submit" class="btn btn-primary" value="Edit Streams" />
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
77  61   GOTO/253                  ?0        ?339                 ?48                 	;0
78  63   ECHO/40                   ?0        49:'														</select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="on_demand">On-Demand Servers</label>
													<div class="col-md-8">
                                                        <select disabled name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
79  64   FE_RESET_R/77             $46=      16?8                 ?89                 	;0
80  64   FE_FETCH_R/78             ?0        $46                  16?9                	;89	>>89	<<88
81  65   ECHO/40                   ?0        50:'															<option value="' ?0                  	;0
82  66   FETCH_DIM_R/81            $47=      16?9                 51:'id'             	;0
83  66   ECHO/40                   ?0        $47                  ?0                  	;0
84  67   ECHO/40                   ?0        52:'">'              ?0                  	;0
85  68   FETCH_DIM_R/81            $48=      16?9                 53:'server_name'    	;0
86  68   ECHO/40                   ?0        $48                  ?0                  	;0
87  69   ECHO/40                   ?0        54:'</option>
															' ?0                  	;0
88  70   JMP/42                    ?0        ?80                  ?0                  	;0	>>80
89  70   FE_FREE/127               ?0        $46                  ?0                  	;0	<<79
90  73   ECHO/40                   ?0        55:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="tv_archive_server_id" name="c_tv_archive_server_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="tv_archive_server_id">Timeshift Server</label>
													<div class="col-md-8">
														<select disabled name="tv_archive_server_id" id="tv_archive_server_id" class="form-control" data-toggle="select2">
															<option value="">Timeshift Disabled</option>
															' ?0                  	;0
91  74   FE_RESET_R/77             $49=      16?8                 ?107                	;0
92  74   FE_FETCH_R/78             ?0        $49                  16?9                	;107	>>107	<<106
93  75   ECHO/40                   ?0        56:'															<option value="' ?0                  	;0
94  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'intval'         	;1
95  76   FETCH_DIM_FUNC_ARG/93     $50=      16?9                 59:'id'             	;1
96  76   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
97  76   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
98  76   ECHO/40                   ?0        $51                  ?0                  	;0
99  77   ECHO/40                   ?0        60:'">'              ?0                  	;0
100 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'htmlspecialchars'	;1
101 78   FETCH_DIM_FUNC_ARG/93     $52=      16?9                 63:'server_name'    	;1
102 78   SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
103 78   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
104 78   ECHO/40                   ?0        $53                  ?0                  	;0
105 79   ECHO/40                   ?0        64:'</option>
															' ?0                  	;0
106 80   JMP/42                    ?0        ?92                  ?0                  	;0	>>92
107 80   FE_FREE/127               ?0        $49                  ?0                  	;0	<<91
108 82   GOTO/253                  ?0        ?109                 ?65                 	;0
109 85   ECHO/40                   ?0        66:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="vframes_server_id" name="c_vframes_server_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="vframes_server_id">Thumbnail Server</label>
													<div class="col-md-8">
														<select disabled name="vframes_server_id" id="vframes_server_id" class="form-control" data-toggle="select2">
															<option value="">Thumbnails Disabled</option>
															' ?0                  	;0
110 86   FE_RESET_R/77             $54=      16?8                 ?126                	;0
111 86   FE_FETCH_R/78             ?0        $54                  16?9                	;126	>>126	<<125
112 87   ECHO/40                   ?0        67:'															<option value="' ?0                  	;0
113 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'intval'         	;1
114 88   FETCH_DIM_FUNC_ARG/93     $55=      16?9                 70:'id'             	;1
115 88   SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
116 88   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
117 88   ECHO/40                   ?0        $56                  ?0                  	;0
118 89   ECHO/40                   ?0        71:'">'              ?0                  	;0
119 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'htmlspecialchars'	;1
120 90   FETCH_DIM_FUNC_ARG/93     $57=      16?9                 74:'server_name'    	;1
121 90   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
122 90   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
123 90   ECHO/40                   ?0        $58                  ?0                  	;0
124 91   ECHO/40                   ?0        75:'</option>
															' ?0                  	;0
125 92   JMP/42                    ?0        ?111                 ?0                  	;0	>>111
126 92   FE_FREE/127               ?0        $54                  ?0                  	;0	<<110
127 95   ECHO/40                   ?0        76:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="llod" data-type="switch" name="c_llod">
														<label></label>
													</div>
                                                    <label class="col-md-3 col-form-label" for="llod">Low Latency On-Demand</label>
													<div class="col-md-2">
														<select name="llod" id="llod" class="form-control" data-toggle="select2">
															' ?0                  	;0
128 96   GOTO/253                  ?0        ?66                  ?77                 	;0
129 99   ECHO/40                   ?0        78:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="bouquets_type" id="bouquets_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
130 100  FE_RESET_R/77             $59=      79:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?138                	;0
131 100  FE_FETCH_R/78             ?0        $59                  16?1                	;138	>>138	<<137
132 101  ECHO/40                   ?0        80:'															<option value="' ?0                  	;0
133 102  ECHO/40                   ?0        16?1                 ?0                  	;0
134 103  ECHO/40                   ?0        81:'">'              ?0                  	;0
135 104  ECHO/40                   ?0        16?1                 ?0                  	;0
136 105  ECHO/40                   ?0        82:'</option>
															' ?0                  	;0
137 106  JMP/42                    ?0        ?131                 ?0                  	;0	>>131
138 106  FE_FREE/127               ?0        $59                  ?0                  	;0	<<130
139 109  ECHO/40                   ?0        83:'														</select>
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="gen_timestamps" data-type="switch" name="c_gen_timestamps">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="gen_timestamps">Generate PTS</label>
													<div class="col-md-2">
														<input name="gen_timestamps" id="gen_timestamps" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="read_native">Native Frames</label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="read_native" data-type="switch" name="c_read_native">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="stream_all" data-type="switch" name="c_stream_all">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="stream_all">Stream All Codecs</label>
													<div class="col-md-2">
														<input name="stream_all" id="stream_all" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="allow_record">Allow Recording</label>
													<div class="col-md-2">
														<input name="allow_record" id="allow_record" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="allow_record" data-type="switch" name="c_allow_record">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="direct_source" data-type="switch" name="c_direct_source">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="direct_source">Direct Source</label>
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
														<input type="checkbox" class="activate" data-name="delay_minutes" name="c_delay_minutes">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="delay_minutes">Minute Delay</label>
													<div class="col-md-2">
														<input type="text" disabled class="form-control text-center" id="delay_minutes" name="delay_minutes" value="0">
													</div>
													<label class="col-md-3 col-form-label" for="probesize_ondemand">On Demand Probesize</label>
													<div class="col-md-2">
														<input type="text" disabled class="form-control text-center" id="probesize_ondemand" name="probesize_ondemand" value="128000">
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="probesize_ondemand" name="c_probesize_ondemand">
														<label></label>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="fps_restart" data-type="switch" name="c_fps_restart">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="fps_restart">Restart on FPS Drop</label>
													<div class="col-md-2">
														<input name="fps_restart" id="fps_restart" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="fps_threshold">FPS Threshold %</label>
													<div class="col-md-2">
														<input type="text" disabled class="form-control text-center" id="fps_threshold" name="fps_threshold" value="90">
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="fps_threshold" name="c_fps_threshold">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="rtmp_output" data-type="switch" name="c_rtmp_output">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="rtmp_output">Output RTMP</label>
													<div class="col-md-2">
														<input name="rtmp_output" id="rtmp_output" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="custom_sid">Custom Channel SID</label>
													<div class="col-md-2">
														<input type="text" disabled class="form-control" id="custom_sid" name="custom_sid" value="">
													</div>
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="custom_sid" name="c_custom_sid">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="user_agent" name="c_user_agent">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="user_agent">User Agent</label>
													<div class="col-md-8">
														<input type="text" disabled class="form-control" id="user_agent" name="user_agent" value="' ?0                  	;0
140 110  GOTO/253                  ?0        ?269                 ?84                 	;0
141 113  ECHO/40                   ?0        85:'                                                </select>
                                            </div>
											<div class="col-md-3 col-6">
												<select id="category_search" class="form-control" data-toggle="select2">
													<option value="" selected>All Categories</option>
                                                    <option value="-1">No Categories</option>
													' ?0                  	;0
142 114  FE_RESET_R/77             $60=      16?10                ?172                	;0
143 114  FE_FETCH_R/78             ?0        $60                  16?11               	;172	>>172	<<171
144 115  ECHO/40                   ?0        86:'													<option value="' ?0                  	;0
145 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'intval'         	;1
146 116  FETCH_DIM_FUNC_ARG/93     $61=      16?11                89:'id'             	;1
147 116  SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
148 116  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
149 116  ECHO/40                   ?0        $62                  ?0                  	;0
150 117  ECHO/40                   ?0        90:'"'               ?0                  	;0
151 118  FETCH_STATIC_PROP_IS/176  $63=      91:'rRequest'        92:'XUI'            	;0
152 118  ISSET_ISEMPTY_DIM_OBJ/115 #64=      $63                  94:'category'       	;33554432
153 118  JMPZ_EX/46                #64=      #64                  ?159                	;0	>>159
154 118  FETCH_STATIC_PROP_R/173   $65=      95:'rRequest'        96:'XUI'            	;0
155 118  FETCH_DIM_R/81            $66=      $65                  98:'category'       	;0
156 118  FETCH_DIM_R/81            $67=      16?11                99:'id'             	;0
157 118  IS_EQUAL/17               #68=      $66                  $67                 	;0
158 118  BOOL/52                   #64=      #68                  ?0                  	;0
159 118  BOOL_NOT/13               #69=      #64                  ?0                  	;0	<<153
160 118  JMPZ/43                   ?0        #69                  ?163                	;0	>>163
161 119  NOP/0                     ?0        ?0                   ?0                  	;1
162 119  GOTO/253                  ?0        ?164                 ?100                	;0
163 121  ECHO/40                   ?0        101:' selected'      ?0                  	;0	<<160
164 123  ECHO/40                   ?0        102:'>'              ?0                  	;0
165 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'htmlspecialchars'	;1
166 124  FETCH_DIM_FUNC_ARG/93     $70=      16?11                105:'category_name' 	;1
167 124  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
168 124  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
169 124  ECHO/40                   ?0        $71                  ?0                  	;0
170 125  ECHO/40                   ?0        106:'</option>
													' ?0                  	;0
171 126  JMP/42                    ?0        ?143                 ?0                  	;0	>>143
172 126  FE_FREE/127               ?0        $60                  ?0                  	;0	<<142
173 129  ECHO/40                   ?0        107:'												</select>
											</div>
                                            <div class="col-md-2 col-6">
                                                <select id="stream_filter" class="form-control" data-toggle="select2">
                                                    <option value="" selected>No Filter</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Down</option>
                                                    <option value="3">Stopped</option>
                                                    <option value="4">Starting</option>
                                                    <option value="5">On Demand</option>
                                                    <option value="6">Direct</option>
                                                    <option value="7">Timeshift</option>
                                                    <option value="8">Looping</option>
                                                    <option value="9">Has EPG</option>
                                                    <option value="10">No EPG</option>
                                                    <option value="11">Adaptive Link</option>
                                                    <option value="12">Title Sync</option>
                                                    <option value="13">Transcoding</option>
                                                </select>
                                            </div>
											<div class="col-md-1 col-6">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
174 130  GOTO/253                  ?0        ?202                 ?108                	;0
175 132  ISSET_ISEMPTY_CV/197      #72=      16?12                ?0                  	;33554432
176 132  JMPZ_EX/46                #72=      #72                  ?180                	;0	>>180
177 132  FETCH_CONSTANT/99         #73=      ?0                   109:'STATUS_SUCCESS'	;16
178 132  IS_EQUAL/17               #74=      16?12                #73                 	;0
179 132  BOOL/52                   #72=      #74                  ?0                  	;0
180 132  BOOL_NOT/13               #75=      #72                  ?0                  	;0	<<176
181 132  JMPZ/43                   ?0        #75                  ?183                	;0	>>183
182 133  GOTO/253                  ?0        ?184                 ?112                	;0
183 135  ECHO/40                   ?0        113:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass edit of streams was successfully executed!
				</div>
				' ?0                  	;0	<<181
184 137  ECHO/40                   ?0        114:'				<div class="card">
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
											<span class="d-none d-sm-inline">Streams</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#auto-restart" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-clock-outline mr-1"></i>
											<span class="d-none d-sm-inline">Auto Restart</span>
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
									<div class="tab-pane" id="stream-selection">
										<div class="row">
											<div class="col-md-2 col-6">
												<input type="text" class="form-control" id="stream_search" value="" placeholder="Search Streams...">
											</div>
                                            <div class="col-md-3 col-6">
                                                <select id="stream_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
185 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'C6A90bFcd425Eb63'	;0
186 138  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
187 138  FE_RESET_R/77             $77=      $76                  ?200                	;0
188 138  FE_FETCH_R/78             ?0        $77                  16?9                	;200	>>200	<<199
189 139  ECHO/40                   ?0        117:'                                                    <option value="' ?0                  	;0
190 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'intval'        	;1
191 140  FETCH_DIM_FUNC_ARG/93     $78=      16?9                 120:'id'            	;1
192 140  SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
193 140  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
194 140  ECHO/40                   ?0        $79                  ?0                  	;0
195 141  ECHO/40                   ?0        121:'">'             ?0                  	;0
196 142  FETCH_DIM_R/81            $80=      16?9                 122:'server_name'   	;0
197 142  ECHO/40                   ?0        $80                  ?0                  	;0
198 143  ECHO/40                   ?0        123:'</option>
                                                    ' ?0                  	;0
199 144  JMP/42                    ?0        ?188                 ?0                  	;0	>>188
200 144  FE_FREE/127               ?0        $77                  ?0                  	;0	<<187
201 146  GOTO/253                  ?0        ?141                 ?124                	;0
202 148  FE_RESET_R/77             $81=      125:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?218                	;0
203 148  FE_FETCH_R/78             ?0        $81                  16?13               	;218	>>218	<<217
204 149  ECHO/40                   ?0        126:'													<option' ?0                  	;0
205 150  FETCH_DIM_R/81            $82=      16?14                127:'default_entries'	;0
206 150  IS_EQUAL/17               #83=      $82                  16?13               	;0
207 150  BOOL_NOT/13               #84=      #83                  ?0                  	;0
208 150  JMPZ/43                   ?0        #84                  ?211                	;0	>>211
209 151  NOP/0                     ?0        ?0                   ?0                  	;1
210 151  GOTO/253                  ?0        ?212                 ?128                	;0
211 153  ECHO/40                   ?0        129:' selected'      ?0                  	;0	<<208
212 155  ECHO/40                   ?0        130:' value="'       ?0                  	;0
213 156  ECHO/40                   ?0        16?13                ?0                  	;0
214 157  ECHO/40                   ?0        131:'">'             ?0                  	;0
215 158  ECHO/40                   ?0        16?13                ?0                  	;0
216 159  ECHO/40                   ?0        132:'</option>
													' ?0                  	;0
217 160  JMP/42                    ?0        ?203                 ?0                  	;0	>>203
218 160  FE_FREE/127               ?0        $81                  ?0                  	;0	<<202
219 163  ECHO/40                   ?0        133:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-mass" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">ID</th>
                                                        <th class="text-center">Icon</th>
														<th>Stream Name</th>
														<th>Category</th>
                                                        <th>Server</th>
                                                        <th class="text-center">Status</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="category_id" name="c_category_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="category_id">Select Categories</label>
													<div class="col-md-6">
														<select disabled name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
220 164  FE_RESET_R/77             $85=      16?10                ?236                	;0
221 164  FE_FETCH_R/78             ?0        $85                  16?11               	;236	>>236	<<235
222 165  ECHO/40                   ?0        134:'															<option value="' ?0                  	;0
223 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'intval'        	;1
224 166  FETCH_DIM_FUNC_ARG/93     $86=      16?11                137:'id'            	;1
225 166  SEND_VAR_EX/66            ?80       $86                  ?1                  	;0
226 166  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
227 166  ECHO/40                   ?0        $87                  ?0                  	;0
228 167  ECHO/40                   ?0        138:'">'             ?0                  	;0
229 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'htmlspecialchars'	;1
230 168  FETCH_DIM_FUNC_ARG/93     $88=      16?11                141:'category_name' 	;1
231 168  SEND_VAR_EX/66            ?80       $88                  ?1                  	;0
232 168  DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
233 168  ECHO/40                   ?0        $89                  ?0                  	;0
234 169  ECHO/40                   ?0        142:'</option>
															' ?0                  	;0
235 170  JMP/42                    ?0        ?221                 ?0                  	;0	>>221
236 170  FE_FREE/127               ?0        $85                  ?0                  	;0	<<220
237 173  GOTO/253                  ?0        ?303                 ?143                	;0
238 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'f769e3F0c739D1A6'	;1
239 175  SEND_VAL_EX/116           ?80       146:'live'           ?1                  	;0
240 175  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
241 175  ASSIGN/38                 ?73       16?10                $90                 	;0
242 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'B20D33b2749AdfEC'	;0
243 176  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
244 176  ASSIGN/38                 ?75       16?3                 $92                 	;0
245 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'f93e9343c3d7fD99'	;0
246 177  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
247 177  ASSIGN/38                 ?77       16?4                 $94                 	;0
248 178  ASSIGN/38                 ?78       16?15                151:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Online</strong>',
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
249 179  FE_RESET_R/77             $97=      16?8                 ?267                	;0
250 179  FE_FETCH_R/78             ?0        $97                  16?9                	;267	>>267	<<266
251 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'intval'        	;1
252 180  FETCH_DIM_FUNC_ARG/93     $99=      16?9                 154:'id'            	;1
253 180  SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
254 180  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
255 180  INIT_ARRAY/71             #101=     $100                 155:'id'            	;22
256 180  ADD_ARRAY_ELEMENT/72      #101=     156:'offline'        157:'parent'        	;0
257 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'htmlspecialchars'	;1
258 180  FETCH_DIM_FUNC_ARG/93     $102=     16?9                 160:'server_name'   	;1
259 180  SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
260 180  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
261 180  ADD_ARRAY_ELEMENT/72      #101=     $103                 161:'text'          	;0
262 180  ADD_ARRAY_ELEMENT/72      #101=     162:'mdi mdi-server-network' 163:'icon'          	;0
263 180  ADD_ARRAY_ELEMENT/72      #101=     164:array (
  'opened' => true,
) 165:'state'         	;0
264 180  ASSIGN_DIM/147            ?80       16?15                ?4386466            	;0
265 180  OP_DATA/137               ?0        #101                 ?0                  	;0
266 181  JMP/42                    ?0        ?250                 ?0                  	;0	>>250
267 181  FE_FREE/127               ?0        $97                  ?0                  	;0	<<249
268 183  GOTO/253                  ?0        ?39                  ?166                	;0
269 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'htmlspecialchars'	;1
270 185  FETCH_DIM_FUNC_ARG/93     $104=     16?3                 169:'user_agent'    	;1
271 185  FETCH_DIM_FUNC_ARG/93     $105=     $104                 170:'argument_default_value'	;1
272 185  SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
273 185  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
274 185  ECHO/40                   ?0        $106                 ?0                  	;0
275 186  ECHO/40                   ?0        171:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="http_proxy" name="c_http_proxy">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy</label>
													<div class="col-md-8">
														<input type="text" disabled class="form-control" id="http_proxy" name="http_proxy" value="' ?0                  	;0
276 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'htmlspecialchars'	;1
277 187  FETCH_DIM_FUNC_ARG/93     $107=     16?3                 174:'proxy'         	;1
278 187  FETCH_DIM_FUNC_ARG/93     $108=     $107                 175:'argument_default_value'	;1
279 187  SEND_VAR_EX/66            ?80       $108                 ?1                  	;0
280 187  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
281 187  ECHO/40                   ?0        $109                 ?0                  	;0
282 188  ECHO/40                   ?0        176:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="cookie" name="c_cookie">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="cookie">Cookie</label>
													<div class="col-md-8">
														<input type="text" disabled class="form-control" id="cookie" name="cookie" value="' ?0                  	;0
283 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'htmlspecialchars'	;1
284 189  FETCH_DIM_FUNC_ARG/93     $110=     16?3                 179:'cookie'        	;1
285 189  FETCH_DIM_FUNC_ARG/93     $111=     $110                 180:'argument_default_value'	;1
286 189  SEND_VAR_EX/66            ?80       $111                 ?1                  	;0
287 189  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
288 189  ECHO/40                   ?0        $112                 ?0                  	;0
289 190  GOTO/253                  ?0        ?16                  ?181                	;0
290 192  ECHO/40                   ?0        182:'														</select>
													</div>
												</div>
											</div> 
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
									
									<div class="tab-pane" id="auto-restart">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="days_to_restart" name="c_days_to_restart">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="days_to_restart">Days to Restart</label>
													<div class="col-md-8">
														' ?0                  	;0
291 193  ASSIGN/38                 ?95       16?0                 183:array (
  'days' => 
  array (
  ),
  'at' => '06:00',
)	;0
292 194  ECHO/40                   ?0        184:'														<select disabled id="days_to_restart" name="days_to_restart[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
															' ?0                  	;0
293 195  FE_RESET_R/77             $114=     185:array (
  0 => 'Monday',
  1 => 'Tuesday',
  2 => 'Wednesday',
  3 => 'Thursday',
  4 => 'Friday',
  5 => 'Saturday',
  6 => 'Sunday',
) ?301                	;0
294 195  FE_FETCH_R/78             ?0        $114                 16?16               	;301	>>301	<<300
295 196  ECHO/40                   ?0        186:'															<option value="' ?0                  	;0
296 197  ECHO/40                   ?0        16?16                ?0                  	;0
297 198  ECHO/40                   ?0        187:'">'             ?0                  	;0
298 199  ECHO/40                   ?0        16?16                ?0                  	;0
299 200  ECHO/40                   ?0        188:'</option>
															' ?0                  	;0
300 201  JMP/42                    ?0        ?294                 ?0                  	;0	>>294
301 201  FE_FREE/127               ?0        $114                 ?0                  	;0	<<293
302 204  GOTO/253                  ?0        ?1                   ?189                	;0
303 206  ECHO/40                   ?0        190:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="category_id_type" id="category_id_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
304 207  FE_RESET_R/77             $115=     191:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?312                	;0
305 207  FE_FETCH_R/78             ?0        $115                 16?1                	;312	>>312	<<311
306 208  ECHO/40                   ?0        192:'															<option value="' ?0                  	;0
307 209  ECHO/40                   ?0        16?1                 ?0                  	;0
308 210  ECHO/40                   ?0        193:'">'             ?0                  	;0
309 211  ECHO/40                   ?0        16?1                 ?0                  	;0
310 212  ECHO/40                   ?0        194:'</option>
															' ?0                  	;0
311 213  JMP/42                    ?0        ?305                 ?0                  	;0	>>305
312 213  FE_FREE/127               ?0        $115                 ?0                  	;0	<<304
313 216  ECHO/40                   ?0        195:'														</select>
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="bouquets" name="c_bouquets">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="bouquets">Select Bouquets</label>
													<div class="col-md-6">
														<select disabled name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
314 217  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'F964b9222b35ADdD'	;0
315 217  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
316 217  FE_RESET_R/77             $117=     $116                 ?332                	;0
317 217  FE_FETCH_R/78             ?0        $117                 16?17               	;332	>>332	<<331
318 218  ECHO/40                   ?0        198:'															<option value="' ?0                  	;0
319 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'intval'        	;1
320 219  FETCH_DIM_FUNC_ARG/93     $118=     16?17                201:'id'            	;1
321 219  SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
322 219  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
323 219  ECHO/40                   ?0        $119                 ?0                  	;0
324 220  ECHO/40                   ?0        202:'">'             ?0                  	;0
325 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'htmlspecialchars'	;1
326 221  FETCH_DIM_FUNC_ARG/93     $120=     16?17                205:'bouquet_name'  	;1
327 221  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
328 221  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
329 221  ECHO/40                   ?0        $121                 ?0                  	;0
330 222  ECHO/40                   ?0        206:'</option>
															' ?0                  	;0
331 223  JMP/42                    ?0        ?317                 ?0                  	;0	>>317
332 223  FE_FREE/127               ?0        $117                 ?0                  	;0	<<316
333 225  GOTO/253                  ?0        ?129                 ?207                	;0
334 227  ECHO/40                   ?0        208:' style="display: none;"' ?0                  	;0
335 229  ECHO/40                   ?0        209:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
336 230  INCLUDE_OR_EVAL/73        ?104      210:'topbar.php'     ?0                  	;2
337 231  ECHO/40                   ?0        211:'					</div>
					<h4 class="page-title">Mass Edit Streams <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
338 232  GOTO/253                  ?0        ?175                 ?212                	;0
339 234  INCLUDE_OR_EVAL/73        ?105      213:'footer.php'     ?0                  	;2
340 235  NOP/0                     ?0        214:1                ?0                  	;4294967295
*/

?>