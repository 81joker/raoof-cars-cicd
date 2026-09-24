/* Service panel — used in 4-up grid (half image / half text) */
function ServicePanel({ img, title, desc, icon, reverse }) {
  return (
    <article style={{
      background: 'white', border: '1px solid #D9D2C4',
      display: 'grid', gridTemplateColumns: '1fr 1fr', minHeight: 280, overflow: 'hidden',
    }}>
      {!reverse && (
        <div style={{
          backgroundImage: `linear-gradient(180deg, rgba(17,17,17,0.1), rgba(17,17,17,0.4)), url('${img}')`,
          backgroundSize: 'cover', backgroundPosition: 'center',
        }} />
      )}
      <div style={{ padding: '36px 32px', display: 'flex', flexDirection: 'column', justifyContent: 'center' }}>
        <div style={{
          width: 48, height: 48,
          border: '1px solid #D4A017', color: '#D4A017',
          display: 'flex', alignItems: 'center', justifyContent: 'center',
          marginBottom: 18,
        }}>
          <Icon name={icon} size={22} />
        </div>
        <h3 style={{
          fontFamily: "'Cairo', 'Tajawal', sans-serif",
          fontSize: 22, fontWeight: 700, color: '#1F1B16',
          margin: '0 0 12px',
        }}>{title}</h3>
        <p style={{
          fontFamily: "'Tajawal'", fontSize: 15, lineHeight: 1.75,
          color: '#4A463E', margin: 0,
        }}>{desc}</p>
      </div>
      {reverse && (
        <div style={{
          backgroundImage: `linear-gradient(180deg, rgba(17,17,17,0.1), rgba(17,17,17,0.4)), url('${img}')`,
          backgroundSize: 'cover', backgroundPosition: 'center',
        }} />
      )}
    </article>
  );
}
window.ServicePanel = ServicePanel;
