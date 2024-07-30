


    <select name="" id="taskStatus" class bg-gray-50 border border-gray-100 >
        <option value="all" @if($status=='all') selected @endif>ALL</option>
        <option value="Compeleted"  @if($status=='completed') selected @endif>Completed</option>
        <option value="pending"  @if($status=='pending') selected @endif>Pending</option>
    </select>