var DB = [];

function model(action, newObj, schema) {
  switch(action) {
    case "add":
      var isValidObject = false;
      for (var prop in newObj) {
        if(!schema.includes(prop)) {
          delete newObj[prop];
        } else {
          isValidObject = true;
        }
      }
      if(isValidObject) {
        DB.push(newObj);
      }
      break;
    default:
  }
}